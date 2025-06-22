<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posyandu;


class JadwalPosyanduController extends Controller
{
    function index(Request $request)
    {
        $query = Posyandu::query();

        if ($request->has('search')) {
            $search = $request->search;
            $query->where('nama_posyandu', 'like', "%$search%")
                ->orWhereHas('fasyankes', function ($q) use ($search) {
                    $q->where('nama', 'like', "%$search%");
                });
        }

        $posyandu = $query->latest()->get();

        return view('ibu_hamil.jadwal_posyandu.index', compact('posyandu'));
    }
}
