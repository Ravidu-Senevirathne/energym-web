<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class DashboardController extends Controller
{
    public function dashboard()
    {
        // Get the currently logged-in user
        $user = Auth::user();

        // Check if the user is logged in and exists
        if (!$user) {
            return redirect('/login'); // Redirect to login if user is not authenticated
        }

        // Pass the user's name to the view
        return view('member', [
            'userName' => $user->name,
        ]);
    }
}



