<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class userValidCourse
{
    public $course_id;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */



    public function handle($request, Closure $next, $course_id)
    {
        if (Auth::User()->courses->contains($course_id)) {
            return $next($request);
        } else {
            return back();
        }
    }
}
