<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // Pastikan ini diimpor

class CheckRole
{
    /**
     * Handle an incoming request.
     * 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Mengecek apakah pengguna sudah login dan apakah role pengguna sesuai
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }

        // Jika role tidak cocok atau pengguna tidak terautentikasi, arahkan ke halaman lain
        return redirect('home');
    }
}
