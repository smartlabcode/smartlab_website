<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTranslation;
use App\Http\Services\MailerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.  --->  /blogs
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        $blogs = DB::table('blogs')
//            ->select(
//            'blog_translations.heading',
//                    'blog_translations.language',
//                    'users.name',
//                    'users.lastname',
//                    'blogs.created_at',
//                    'blogs.id',
//                    'blogs.published'
//            )
//            ->leftJoin('users', 'blogs.users_id', '=', 'users.id')
//            ->leftJoin('blog_translations', 'blogs.id', '=', 'blog_translations.blogs_id')
//            ->get();

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

        // die(print_r($blogs));
        return view('pages.blogs.blogs_list', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.  --->  /blogs/create
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.blogs.blogs_create');
    }

    public function add($id, $lang)
    {

        $blog = DB::table('blogs')
            ->select(
                'blog_translations.heading',
                'blog_translations.language',
                'users.id',
                'blogs.id',
                'blog_translations.text',
                'blog_translations.language'
            )
            ->leftJoin('users', 'blogs.users_id', '=', 'users.id')
            ->leftJoin('blog_translations', 'blogs.id', '=', 'blog_translations.blogs_id')
            ->where('blogs.id', $id)
            ->take(1)
            ->get();

       // die(print_r($blog[0]));
        return view('pages.blogs.blogs_create', [
            'id' => $id,
            'language' => $lang,
            'blog' => $blog[0]
        ]);
    }

    /**
     * Store a newly created resource in storage.  --->  /blogs
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blogTranslation = new BlogTranslation();

        // check if neccessary values are entered correctly, if no return error messages
        $request->validate([
            'content' => 'required',
            'title' => 'required',
            'language' => 'in:en,de,bs',
            'existing' => 'in:true,false'
        ]);

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
            $blogTranslation->save();

            // redirect with message
            return redirect('blogs')->with(['message' => 'Blog successfully added']);
        }

        $blogTranslation->blogs_id = $request->input('blog_id');
        $blogTranslation->heading = $request->input('title');
        $blogTranslation->text = $request->input('content');
        $blogTranslation->language = $request->input('language');
        $blogTranslation->save();

        // redirect with message
        return redirect('blogs')->with(['message' => 'Successfully added translation to a blog.']);
    }

    /**
     * Display the specified resource.  --->  /blogs/{id}
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.blogs.blogs_show');
    }

    /**
     * Show the form for editing the specified resource.  --->  /blogs/{id}/edit
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $lang)
    {
        $blog = DB::table('blogs')
            ->select(
                'blog_translations.heading',
                'blog_translations.language',
                'users.id',
                'blogs.id',
                'blog_translations.text',
                'blog_translations.language'
            )
            ->leftJoin('users', 'blogs.users_id', '=', 'users.id')
            ->leftJoin('blog_translations', 'blogs.id', '=', 'blog_translations.blogs_id')
            ->where('blogs.id', $id)
            ->where('blog_translations.language', $lang)
            ->get();

        return view('pages.blogs.blogs_edit', ['blog' => $blog[0]]);
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

        $request->validate([
            'language' => 'in:en,de,bs',
            'title' => 'required|max:255',
            'content' => 'required'
        ]);


        $blogTranslation = BlogTranslation::where('language', $lang)->where('blogs_id', $id)->first();

        $blogTranslation->heading = $request->input('title');
        $blogTranslation->text = $request->input('content');

        $blogTranslation->save();

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
        $blog = Blog::findOrFail($id);
        $blog->delete();

        $blogTranslations = BlogTranslation::where('blogs_id', $id)->delete();

        // return with message
        $request->session()->flash('message', 'Blog successfully deleted.');
    }


    public function publish(Request $request, $id, $state) {

        $blog = Blog::findOrFail($id);

        $blogTranslation = BlogTranslation::where('language','en')->where('blogs_id', $blog->id)->first();

       // die(print_r($blogTranslation));
        // check if blog is published for first time
        if($blog->published_already == 0) {
            // TODO send request to MailChimp to send new blog to the subscribers
            // TODO DEMO
            $mailer = new MailerService();
            $mailer->sendMailsToSubscribers($blogTranslation->heading, $blogTranslation->text);
        }

        $blog->published = $state;
        $blog->published_already = 1;
        $blog->save();


        $newState = ($state == 'true') ? 'published' : 'unpublished';

        $request->session()->flash('message', 'Blog successfully ' . $newState);
    }
}
