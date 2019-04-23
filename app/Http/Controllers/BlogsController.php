<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.  --->  /blogs
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.blogs.blogs_list');
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
            'language' => 'in:en,de,bs'
        ]);

        // if data is ok set new values to the model
        $blog->users_id = Auth::user()->id;


//        $admin->lastname = $request->input('lastname');
//        $admin->email = $request->input('email');
//        $admin->password = Hash::make($request->input('password'));
//        $admin->roles_id = $request->input('role');

        // save model
        $blog->save();

        $blogTranslation->blogs_id = $blog->id;
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
        return view('pages.blogs.blogs_edit');
    }

    /**
     * Update the specified resource in storage.  --->  /blogs/{id}
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        die("updating blog...");

        // redirect with message
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
