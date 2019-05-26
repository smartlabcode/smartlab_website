<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class XlfUserController extends Controller
{

    public function register(Request $request) {

        // set request data to session so that it can be used for old input if neccessary
        $request->flash();

        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:255|confirmed'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->roles_id = 3;
        $user->save();

        // redirect with message
        return back()->with([
            'message' => 'Successfully registered for the Xlf translator.'
        ]);
    }

    public function login(Request $request) {

        // set request data to session so that it can be used for old input if neccessary
        $request->flash();

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // if authentication passed
            return redirect()->intended('pages/xlf');
        }
    }
}
