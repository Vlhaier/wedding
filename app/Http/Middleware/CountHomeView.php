<?php

namespace App\Http\Middleware;

use Closure;

class CountHomeView
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
        $response = $next($request);

        if($request->user()) {
            $request->user()->increment('views');
        }

        return $response;
    }
}
