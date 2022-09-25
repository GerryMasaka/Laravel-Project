<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function loginin(Request $request){
        $credentials = $request->only('email', 'password');

        if (auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('register');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }
}
