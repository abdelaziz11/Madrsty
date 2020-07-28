<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch($guard)
        {
            case 'teacher':
                if(Auth::guard('teacher')->check())
                {
                    return redirect()->route('teachers.home');
                }
            break;

            case 'student':
                if(Auth::guard('student')->check())
                {
                    return redirect()->route('students.home');
                }
            break;

            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
            break;

        }

        return $next($request);
    }
}
