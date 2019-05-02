<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTag;
use App\BlogTranslation;
use App\Http\Services\LogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{

    private $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    /**
     * Display a listing of the resource.  --->  /blogs
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            // get all not deleted blogs
            $blogs = DB::select(
                'SELECT 
                          bt.heading, 
                          bt.text, 
                          u.name, 
                          u.lastname, 
                          DATE_FORMAT(b.created_at, \'%M %d, %Y\') AS created_at,  
                          b.id, 
                          b.published, 
                          GROUP_CONCAT(bt.language) AS language
                        FROM blogs AS b
                        LEFT JOIN users AS u ON b.users_id = u.id
                        LEFT JOIN blog_translations AS bt ON b.id = bt.blogs_id
                        WHERE b.deleted_at IS NULL
                        GROUP BY b.id');

            // return blogs list page with its data
            return view('pages.blogs.blogs_list', [
                'blogs' => $blogs
            ]);

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'BlogsController - index: '. $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

    /**
     * Show the form for creating a new resource.  --->  /blogs/create
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            // return create blog form page
            return view('pages.blogs.blogs_create');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'BlogsController - create: '. $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

    /**
     * Add new blog translation view
     *
     * @param $id
     * @param $lang
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add($id, $lang)
    {
        try {
            // get already added blog so it can be used as placeholder for the translation
            $blog = DB::table('blogs')
                ->select(
                    'blog_translations.heading',
                    'blog_translations.language',
                    'users.id',
                    'blogs.id',
                    'blog_translations.text',
                    'blog_translations.language'
                )
                ->selectRaw('GROUP_CONCAT(blog_tags.tag) AS tags')
                ->leftJoin('users', 'blogs.users_id', '=', 'users.id')
                ->leftJoin('blog_translations', 'blogs.id', '=', 'blog_translations.blogs_id')
                ->leftJoin('blog_tags', 'blogs.id', '=', 'blog_tags.blogs_id')
                ->where('blogs.id', $id)
                ->take(1)
                ->get();

            // return page with neccessary data
            return view('pages.blogs.blogs_create', [
                'id' => $id,
                'language' => $lang,
                'blog' => $blog[0]
            ]);

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'BlogsController - add: '. $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

    /**
     * Store a newly created resource in storage.  --->  /blogs
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO issues with try/catch block and data validation
        // create blog and blogTranslation objects
        $blog = new Blog();
        $blogTranslation = new BlogTranslation();

        // set request data to session so that it can be used for old input if neccessary
        $request->flash();

        // check if neccessary values are entered correctly, if no return error messages
        $request->validate([
            'content' => 'required|min:3',
            'title' => 'required|min:3|max:255',
            'language' => 'in:en,de,bs',
            'existing' => 'in:true,false',
            'tags' => 'required'
        ]);

        // check if already exist one translation for the blog, if no create new blog in the database
        if ($request->input('existing') == 'false') {

            // if data is ok set new values to the model
            $blog->users_id = Auth::user()->id;
            // save model
            $blog->save();

            // set data to blog_translations
            $blogTranslation->blogs_id = $blog->id;
            $blogTranslation->heading = $request->input('title');
            $blogTranslation->text = $request->input('content');
            $blogTranslation->language = $request->input('language');

            // save translation
            $blogTranslation->save();

            // insert blog tags
            foreach ($request->input('tags') as $tag) {
                $blogTags = new BlogTag();
                $blogTags->tag = $tag;
                $blogTags->blogs_id = $blog->id;
                $blogTags->save();
            }

            // redirect with message
            return redirect('blogs')->with([
                'message' => 'Blog successfully added'
            ]);
        }

        // if blog already exists add translation to it
        $blogTranslation->blogs_id = $request->input('blog_id');
        $blogTranslation->heading = $request->input('title');
        $blogTranslation->text = $request->input('content');
        $blogTranslation->language = $request->input('language');

        // save blog translation
        $blogTranslation->save();

        // redirect with message
        return redirect('blogs')->with([
            'message' => 'Successfully added translation to the blog.'
        ]);
    }

    /**
     * Show the form for editing the specified resource.  --->  /blogs/{id}/edit
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $lang)
    {
        try {
            // get blog for editing
            $blog = DB::table('blogs')
                ->select(
                    'blog_translations.heading',
                    'blog_translations.language',
                    'users.id',
                    'blogs.id',
                    'blog_translations.text',
                    'blog_translations.language'
                )
                ->selectRaw('GROUP_CONCAT(blog_tags.tag) AS tags')
                ->leftJoin('users', 'blogs.users_id', '=', 'users.id')
                ->leftJoin('blog_translations', 'blogs.id', '=', 'blog_translations.blogs_id')
                ->leftJoin('blog_tags', 'blogs.id', '=', 'blog_tags.blogs_id')
                ->where('blogs.id', $id)
                ->where('blog_translations.language', $lang)
                ->get();

            // return view with neccessary data
            return view('pages.blogs.blogs_edit', [
                'blog' => $blog[0],
                'language' => $lang
            ]);

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'BlogsController - edit: '. $e->getMessage());

            // return error view
            return view('pages.general_error');
        }
    }

    /**
     * Update the specified resource in storage.  --->  /blogs/{id}
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $lang)
    {
        // TODO issues with try/catch block and data validation
        // set request data to session so that it can be used for old input if neccessary
        $request->flash();

        // validate if all neccessary data is set properly
        $request->validate([
            'language' => 'in:en,de,bs',
            'title' => 'required|min:3|max:255',
            'content' => 'required|min:3',
            'tags' => 'required'
        ]);

        // find blog translation for editing
        $blogTranslation = BlogTranslation::where('language', $lang)->where('blogs_id', $id)->first();

        // update blog translation
        $blogTranslation->heading = $request->input('title');
        $blogTranslation->text = $request->input('content');

        // save it
        $blogTranslation->save();

        // update tags
        // first delete
        $tags = BlogTag::where('blogs_id', $blogTranslation->blogs_id)->pluck('id')->toArray();
        BlogTag::destroy($tags);

        // insert new blog tags
        foreach ($request->input('tags') as $tag) {
            $blogTags = new BlogTag();
            $blogTags->tag = $tag;
            $blogTags->blogs_id = $blogTranslation->blogs_id;
            $blogTags->save();
        }

        // redirect with message
        return redirect('blogs')->with('message', 'Blog successfully edited.');
    }

    /**
     * Remove the specified resource from storage.  --->  /blogs/{id}
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {
            // get blog to delete
            $blog = Blog::findOrFail($id);
            // soft delete it
            $blog->delete();

            // get blog translations and delete them also
            $blogTranslations = BlogTranslation::where('blogs_id', $id)->delete();

            // return with message
            $request->session()->flash('message', 'Blog successfully deleted.');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'BlogsController - destroy: '. $e->getMessage());

            // return with message
            $request->session()->flash('error', 'Blog couldnt be deleted.');
        }

    }

    /**
     * Publish/unpublish blog with its translations
     *
     * @param Request $request
     * @param $id
     * @param $state
     */
    public function publish(Request $request, $id, $state) {

        try {
            // get blog for publishing/unpublishing
            $blog = Blog::findOrFail($id);

            // set publish state
            $blog->published = $state;
            $blog->published_already = 1;

            // save blog state
            $blog->save();

            // set state messsage to be returned
            $newState = ($state == 'true') ? 'published' : 'unpublished';

            // set message to session
            $request->session()->flash('message', 'Blog successfully ' . $newState);

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'BlogsController - publish: '. $e->getMessage());

            // return with message
            $request->session()->flash('error', 'Couldnt change blog published state.');
        }

    }

}
