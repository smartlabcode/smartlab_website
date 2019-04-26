<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Request;

class CheckIfSuperAdmin
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
        $uri = $request->getRequestUri();

        // disable any page regarding admins management if user isnt superadmin
        if (Auth::user()->roles_id != 1) {
            return redirect('/dashboard');
        }

        return $next($request);
    }
}
