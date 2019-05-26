<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfXlfUser
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
        // disable any page, regarding admins management, if user isnt superadmin
        if (isset(Auth::user()->roles_id)) {

            if (Auth::user()->roles_id == 3) {
                return redirect('/');
            }

        }

        return $next($request);
    }
}
