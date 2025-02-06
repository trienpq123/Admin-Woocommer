<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Checklogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        \Log::info('Check login middleware', [
            'is_authenticated' => Auth::check(),
            'session_id' => session()->getId(),
            'user_id' => Auth::id()
        ]);
        if(!Auth::check()){
            return redirect()->route('login');
        }
        return $next($request);
    }
}
