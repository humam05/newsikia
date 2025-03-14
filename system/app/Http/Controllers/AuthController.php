<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function halamanLogin()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('mahasiswa');
        }

        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    function logout()
    {
        Auth::logout();
        return view('login');
    }
}
