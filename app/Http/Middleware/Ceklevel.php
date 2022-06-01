<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Ceklevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle(Request $request, Closure $next, ...$levels)
    public function handle(Request $request, Closure $next)
    {
        // // return $next($request);
        // if (auth()->user()->level == 1) {
        //     return $next($request);
        // }
        // return redirect('/')->with('error', "kamu gak punya akses");
    }
}
