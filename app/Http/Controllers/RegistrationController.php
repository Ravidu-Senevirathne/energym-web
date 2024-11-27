<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {

        $user = new User($request->all());

        $user->role=($request->input('role'));
        $user->password = ($request->input('password'));
        $request->input('role');

        $user->save();

        return redirect('/page');
    }

}
