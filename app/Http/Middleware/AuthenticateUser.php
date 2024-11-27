<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticateUser
{
       public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role!=='gym_member'&&Auth::user()->role!=='trainer') {
            return redirect()->route('login');
        }

        return $next($request);
    }
}

