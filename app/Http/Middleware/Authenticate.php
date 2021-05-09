<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        /*
        if($request->is_admin =='admin'){
            return $next($request);
        }else if($request->is_admin =='usuario'){
            return redirect('ladingpage')
        }
        */
        if (!$request->expectsJson()) {
            return route('login');
        }
    }
}