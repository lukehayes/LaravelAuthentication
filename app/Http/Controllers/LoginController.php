<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        // TODO Implement manual authentication.
        $credentials = $request->validate([
            'username' => ['required', 'email'],
            'password' => ['required']
        ]);

        dd(Auth::attempt($credentials));
    }
}
