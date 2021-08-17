<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthentication
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
        if (!Auth()->check()){
            return redirect()->to('/admin');
        }

        return $next($request);

        // if(auth()->check())
        // {
        //     return $next($request);
        // }
        // else
        // {
        //     return redirect()->back();
        // }
    }
}
