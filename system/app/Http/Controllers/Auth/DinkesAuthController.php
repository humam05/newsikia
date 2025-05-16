<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DinkesAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.dinkes.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('dinkes')->attempt($credentials)) {
            return redirect()->intended('/dinkes/dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        Auth::guard('dinkes')->logout();
        return redirect('/dinkes/login');
    }

    public function dashboard()
    {
        return view('dinkes.dashboard');
    }
}
