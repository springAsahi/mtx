<?php

namespace App\Http\Middleware;

use Closure;

class CheckHome
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
        $token = session('homeToken');
        if (session()->has('homeToken') && !empty($token)){
            return $next($request);
        }else{
            return redirect()->route('homeLogin');
        }
        return $next($request);
    }
}
