<?php

namespace App\Http\Middleware;

use Closure;

class checkSession
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
        if(!session('lang')){
            session()->put('lang','en');
            app()->setLocale('en');
        }

        if(session('lang') == 'en'){
            app()->setLocale('en');
        }elseif(session('lang') == 'ar')
        {
            app()->setLocale('ar');
        }

        
        return $next($request);
    }
}
