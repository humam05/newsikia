<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function loginProcess(Request $request): RedirectResponse
    {
        // Validate the credentials
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Logout from all guards to reset the session
        $this->logoutFromAllGuards();

        // Try to authenticate with different guards
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        } elseif (Auth::guard('nakes')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('nakes/dashboard');
        } elseif (Auth::guard('ibuhamil')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('ibu_hamil/dashboard');
        } elseif (Auth::guard('puskesmas')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('puskesmas/dashboard');
            // } elseif (Auth::guard('dinkes')->attempt($credentials)) {
            //     $request->session()->regenerate();
            //     return redirect()->intended('dinkes/dashboard');
        } else {
            return back()->withErrors([
                'error' => 'Email atau password salah. Silakan coba lagi.
',
            ])->withInput(request(['email']));
        }
    }

    public function logout(): RedirectResponse
    {
        $this->logoutFromAllGuards();
        return redirect('login');
    }

    private function logoutFromAllGuards(): void
    {
        $guards = ['admin', 'nakes', 'ibuhamil', 'puskesmas'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                Auth::guard($guard)->logout();
            }
        }
        request()->session()->invalidate();
        request()->session()->regenerateToken();
    }
}
