<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TranslationsController extends Controller
{
    public function index() {

        $files = array();

        session_start();

        $path = "../resources/lang/" . App::getlocale() . "/*";
        foreach (glob($path) as $file) {
            if (is_file($file)) {

                $fileName = basename($file);
                array_push($files, substr($fileName, 0, -4));
            }
        }
        //die($path);
//die(print_r($files));
        return view('pages.translations.index', [
            'files' => $files
        ]);
    }

    public function edit($file) {

    }
}
