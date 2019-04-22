<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguagesController extends Controller
{
    public function switchLanguage() {

         App::setlocale('de');
        die("switching language...");
    }
}
