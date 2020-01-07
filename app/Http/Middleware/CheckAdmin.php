<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        return $next($request);
        $token = session('adminToken');
        if (session()->has('adminToken') && !empty($token)){
            return $next($request);
        }else{
            return redirect()->route('adminLogin');
        }
        return $next($request);
    }
}
