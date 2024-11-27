<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate request data
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required|in:gym_member,trainer',
        ]);

        // Retrieve user by username or email
        $user = User::where('username', $request->username)
                    ->orWhere('email', $request->username)
                    ->first();


        if ($user) {

            if (Hash::needsRehash($user->password)) {

                if ($request->password === $user->password) {
                    Auth::login($user);
                    return $this->redirectToRole($user->role);
                }
            } else {
                if (Hash::check($request->password, $user->password)) {
                    Auth::login($user);
                    return $this->redirectToRole($user->role);
                }
            }
        }


        return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
    }


    private function redirectToRole($role)
    {
        if ($role === 'gym_member') {
            return redirect('/member');
        } elseif ($role === 'trainer') {
            return redirect('/trainer');
        }
    }

public function logout(Request $request)
{
    // Log out the user
    Auth::logout();

    // Clear session data
    $request->session()->flush();

    // Clear browser cache and storage
    $response = redirect()->route('login');
    $response->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
    $response->header('Pragma', 'no-cache');
    $response->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');

    return $response;
}
}
