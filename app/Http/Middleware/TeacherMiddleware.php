<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class TeacherMiddleWare
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
        if (Auth::check()&& Auth::User()->role=="teacher"  && Auth::User()->status =="active")
        {
            return $next($request);
        }
        else
        {
            return redirect('/');
        }
    }


}
