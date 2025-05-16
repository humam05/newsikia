<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PuskesmasAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.puskesmas.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('puskesmas')->attempt($credentials)) {
            return redirect()->intended('/puskesmas/dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        Auth::guard('puskesmas')->logout();
        return redirect('/puskesmas/login');
    }

    public function dashboard()
    {
        return view('puskesmas.dashboard');
    }
}
