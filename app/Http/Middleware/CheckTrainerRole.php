<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckTrainerRole
{
    public function handle(Request $request, Closure $next)
    {
        // Ensure the user is authenticated
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Check if the user has the 'trainer' role
        $user = Auth::user();
        if ($user->role !== 'trainer') {
            return response()->json(['error' => 'Forbidden'], 403);
        }

        return $next($request);
    }
}
