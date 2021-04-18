<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMerchant
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
        if(Auth::user() && Auth::user()->roles == 'MERCHANT'){
            return $next($request);
        }
        return redirect('/merchant');    }
}
