<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session();
            return redirect()->intended('/homepage');
        }

        // dd('berhasil');
        return back()->with('loginError', 'login fail! Try Again With Correct Email and Password');
    }

    public function logout()
    {
    }
}
