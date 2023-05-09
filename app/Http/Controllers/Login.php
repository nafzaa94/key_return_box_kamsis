<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index()
    {
        return view('loginPage');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'min:8|max:20'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/home');
        }

        return redirect()->back()->with('error', 'Invalid email or password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
