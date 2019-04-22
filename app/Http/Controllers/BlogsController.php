<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        die("saving blog...");

        // redirect with message
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
