<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTranslation;
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
        // get blogs
        $blogs = DB::table('blogs')
            ->select(
                'blog_translations.heading',
                        'users.id',
                        'users.name',
                        'users.lastname',
                        'blogs.created_at'
            )
            ->leftJoin('users', 'blogs.users_id', '=', 'users.id')
            ->leftJoin('blog_translations', 'blogs.users_id', '=', 'blog_translations.blogs_id')
            ->get();
//die(print_r($blogs));

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
            'language' => 'in:en,de,bs'
        ]);

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
        return back()->with(['message' => 'Blog successfully added']);
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
    public function edit($id)
    {
        $blog = DB::table('blogs')
            ->select(
                'blog_translations.heading',
                'users.id',
                'blogs.id',
                'blog_translations.text',
                'blog_translations.language'
            )
            ->leftJoin('users', 'blogs.users_id', '=', 'users.id')
            ->leftJoin('blog_translations', 'blogs.users_id', '=', 'blog_translations.blogs_id')
            ->where('blogs.id', $id)
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
        // $blog = Blog::findOrFail($id);

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
        return back()->with('message', 'Blog successfully edited.');
    }

    /**
     * Remove the specified resource from storage.  --->  /blogs/{id}
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        die("deleting blog...");

        // redirect with message
    }
}
