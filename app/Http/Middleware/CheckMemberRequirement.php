<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckMemberRequirement
{

   public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role === 'gym_member' && ($user->memberRequirement === 'Fat Burning' || $user->memberRequirement === 'Body Building' || $user->memberRequirement === 'Regular Exercise')) {
                return $next($request);
            }
        }

        return redirect()->route('login')->with('error', 'You are not authorized to access this page.');
    }
}
