<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IbuHamilAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.ibu_hamil.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('ibu_hamil')->attempt($credentials)) {
            return redirect()->intended('/ibu_hamil/dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        Auth::guard('ibu_hamil')->logout();
        return redirect('/ibu_hamil/login');
    }

    public function dashboard()
    {
        return view('ibu_hamil.dashboard');
    }
}
