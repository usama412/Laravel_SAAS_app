<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $userType = Auth::user()->userTypes;

            // Redirect based on the user's role
            if ($userType === 'admin') {
                return $next($request); // Allow access if user is admin
            } elseif ($userType === 'user') {
                return $next($request); // Redirect to user dashboard if user is not admin
            } else {
                return redirect('/login'); // Redirect to login if user type is not recognized
            }
        }

        // Redirect to login page if not authenticated
        return redirect('/login');
    }
}
