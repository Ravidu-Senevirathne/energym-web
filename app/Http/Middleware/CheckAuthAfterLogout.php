<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAuthAfterLogout
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            return $next($request);
        }

        // Redirect to login page or display unauthorized error
        return redirect()->route('login')->with('error', 'Unauthorized access.');
    }
}
