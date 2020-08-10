<?php

namespace App\Http\Middleware;

use App\Model\Course;
use Illuminate\Support\Facades\Auth;


use Closure;

class validateRole
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
        $courses = Auth::User()->courses;
        foreach ($courses as $key => $value) {
            if($request->id==$value->id)
            {
                return $next($request);
            }
        }
        dd("Not Valid");
    }

}
