<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class userlogin
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
        if(empty(Session::has('frontlogin'))){
            return redirect('/');
           
        }else{
          
         return $next($request);
         }
    }
}
