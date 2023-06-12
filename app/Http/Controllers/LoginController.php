<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);


        if(Auth::attempt($credentials))
        {
            dd("Auth Attempt");
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        dd("After Auth Attempt");

        return back()->withErrors([
            'email' => 'Email error.',
            'password' => 'Password error.'
        ]);
    }
}
