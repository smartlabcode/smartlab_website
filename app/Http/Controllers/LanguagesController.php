<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguagesController extends Controller
{
    public function switchLanguage(Request $request) {

        // get language
        $language = $request->input("language");

        // set language to session so that we can check it in the middleware
        session_start();
        session()->put('language', $language);

        // return to last visted page
        return back();
    }
}
