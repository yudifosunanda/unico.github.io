<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;

class Checksesion
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

      if(!Session::get('login')){
          return redirect('/login')->with('alertfaileddata','Your session is expired. Please re-login');
      }
        return $next($request);
    }
}
