<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd($next($request));
    
        if (Auth::check()) {
            // User is authenticated, allow the request to continue
          
            return $next($request);
            // dd($next($request));
        }

        // User is not authenticated, redirect to the login page
        return redirect('/login');
    }
}
