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
    if ($request->filled('cari')) {
        $search = $request->cari;

        $query->where(function($q) use ($search) {
            $q->where('nik', 'like', "%{$search}%")
              ->orWhere('no_kk', 'like', "%{$search}%");
        });
    }

    $data['ortu'] = $query->get();

    return view('nakes.dashboard', $data);
}

}
