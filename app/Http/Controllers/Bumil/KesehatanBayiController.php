<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identitas;
use App\Models\PeriksaBayi;
use App\Models\Anak;

use Illuminate\Support\Facades\Auth;

class KesehatanBayiController extends Controller
{
    public function index()
    {
        $login = Auth::guard('ibuhamil')->user();
        $identitas = Identitas::where('ibu_hamil_id', $login->id)->first();

        // Ambil semua anak milik ibu tersebut
        $anakIds = Anak::where('identitas_id', $identitas->id)->pluck('id');

        // Ambil pemeriksaan berdasarkan anak-anak tersebut
        $data['periksaBayi'] = PeriksaBayi::whereIn('anak_id', $anakIds)->with('anak.identitas')->get();

        return view('ibu_hamil.kesehatan_bayi.index', $data);
    }




    public function show(PeriksaBayi $periksaBayi)
    {
        $anak = $periksaBayi->anak; // pastikan relasi ini ada di model

        return view('ibu_hamil.kesehatan_bayi.show', compact('periksaBayi', 'anak'));
    }
}
