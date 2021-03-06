<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class LoginMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::user()!=null){
            if(Auth::user()->email=='admin@gmail.com'){
                return $next($request);   
            }
            //else
            return redirect('/');
        }
       return redirect('login');
    }
}
