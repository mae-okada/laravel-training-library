<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
        
    public function isAdmin($user)
    {
        return $user->role === 'admin'; 
    }
    
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && $this->isAdmin(Auth::user())) {
            return $next($request);
        }
    
        return redirect('/');
    }
}
