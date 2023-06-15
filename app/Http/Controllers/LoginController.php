<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);


        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'username' => 'That username could not be found.',
            'password' => 'That password looks like it is incorrect.'
        ]);
    }
}
