<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $admin = new User();
        // check if neccessary values are entered correctly, if no return error messages
        $request->validate([
            'name' => 'required|max:45',
            'lastname' => 'required|max:45',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'in:1,2'
        ]);

        // if data is ok set new values to the model
        $admin->name = $request->input('name');
        $admin->lastname = $request->input('lastname');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->roles_id = $request->input('role');

        // save model
        $admin->save();

        // redirect with message
        return redirect('admins')->with(['message' => 'Admin successfully added']);
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
        $admin = User::findOrFail($id);

        // check if neccessary values are entered correctly, if no return error messages
        $request->validate([
            'name' => 'required|max:45',
            'lastname' => 'required|max:45',
            'role' => 'in:1,2'
        ]);

        // if data is ok set new values to the model
        $admin->name = $request->input('name');
        $admin->lastname = $request->input('lastname');
        $admin->roles_id = $request->input('role');

        // save model
        $admin->save();

        // redirect with message
        return redirect('admins')->with(['message' => 'Admin successfully edited']);
    }

    /**
     * Remove the specified resource from storage.  --->  /admins/{id}
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $admin = User::findOrFail($id);
        $admin->delete();

        // return with message
        $request->session()->flash('message', 'Admin successfully deleted.');
    }
}
