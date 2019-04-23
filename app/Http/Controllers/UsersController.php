<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.  --->  /admins
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::all();

        return view('pages.admins.admins_list', ['admins' => $admins]);
    }

    /**
     * Show the form for creating a new resource.  --->  /admins/create
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admins.admins_create');
    }

    /**
     * Store a newly created resource in storage.  --->  /admins
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        die("saving admin...");

        // return with message
    }

    /**
     * Show the form for editing the specified resource.  --->  /admins/{id}/edit
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = User::findOrFail($id);

        return view('pages.admins.admins_edit', ['admin' => $admin]);
    }

    /**
     * Update the specified resource in storage.  --->  /admins/{id}
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        die("updating admin...");

        // redirect with message
    }

    /**
     * Remove the specified resource from storage.  --->  /admins/{id}
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        die("deleting admin...");

        // redirect with message
    }
}
