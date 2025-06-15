<?php

namespace App\Http\Controllers\Nakes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identitas;
use App\Models\Anak;

class DashboardnController extends Controller
{
    function index(Request $request)
    {
        $totalIbuHamil = Identitas::count();
        $totalAnak = Anak::count();
        $query = Identitas::query();

        if ($request->has('search')) {
            $query->where('nik_ibu', 'ibu_nama', 'like', '%' . $request->search . '%');
        }

        $data['identitas'] = $query->get();
        return view('nakes.dashboard', $data, compact('totalIbuHamil', 'totalAnak'));
    }
}
