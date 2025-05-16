<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NakesAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.nakes.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('nakes')->attempt($credentials)) {
            return redirect()->intended('/nakes/dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        Auth::guard('nakes')->logout();
        return redirect('/nakes/login');
    }

    public function dashboard()
    {
        return view('nakes.dashboard');
    }
}
