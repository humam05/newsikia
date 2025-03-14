<?php

namespace App\Http\Controllers\Nakes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ortu; // Pastikan model Ortu sudah digunakan

class DashboardnController extends Controller
{
    function index(Request $request)
    {
        $query = Ortu::query();

        // Jika ada input pencarian
        if ($request->has('cari')) {
            $query->where('nik', 'like', "%{$request->cari}%")
                  ->orWhere('no_kk', 'like', "%{$request->cari}%");
        }

        $data['ortu'] = $query->get();
        return view('nakes.dashboard', $data);
    }
}
