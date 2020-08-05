<?php

namespace App\Http\Middleware;

use Session;
use Closure;

class setLocale
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
        if(session()->has('lang')){
            session()->forget('lang');
        }

        if($request->segment(1) == 'en'){
            session()->put('lang', 'en');
            app()->setLocale('en');
            // return back();

        }elseif($request->segment(1) == 'ar'){
            session()->put('lang', 'ar');
            app()->setLocale('ar');
            // return back();

        }else{
            session()->put('lang', 'en');
            // return redirect('/');
        }
        

        Session::save();

        
        return $next($request);
    }
}
