<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

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
        // if (! $request->expectsJson()) {
        //
        // }

        $user = $request->user();

        if (!$user || $user->user_type != 'teacher' || $user->user_type != 'student') {
            return route('login');
        }

        // if(!Auth::check()){
        //     return redirect('/');
        // }

        // if(!Auth::user()->user_type == 'teacher'){
        //     return redirect('dashboard');
        // }

        // return $next($request);
    }
}
