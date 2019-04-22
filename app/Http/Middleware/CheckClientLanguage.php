<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class CheckClientLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // get language
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

        // check language
        if ($lang == 'bs' || $lang == 'hr' || $lang == 'sr') {
            $lang = 'bs';
        } else if ($lang == 'de') {
            $lang = 'de';
        } else {
            $lang = 'en';
        }

        // set language
        App::setlocale($lang);

        return $next($request);

        // see: https://stackoverflow.com/questions/3650006/get-country-of-ip-address-with-php
    }
}
