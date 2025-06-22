<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identitas;
use App\Models\PeriksaBayi;
use App\Models\Anak;
use Illuminate\Support\Facades\Auth;

class DashboardbController extends Controller
{

    public function grafik($id)
    {
        $periksaBayi = PeriksaBayi::where('anak_id', $id)->orderBy('tanggal_pemeriksaan')->get();

        return view('ibu_hamil.dashboard', compact('periksaBayi'));
    }

    public function index()
    {
        $login = Auth::guard('ibuhamil')->user();
        $identitas = Identitas::where('ibu_hamil_id', $login->id)->first();

        $periksaBayi = collect(); // default kosong
        if ($identitas) {
            $anakIds = Anak::where('identitas_id', $identitas->id)->pluck('id');
            $periksaBayi = PeriksaBayi::whereIn('anak_id', $anakIds)
                ->orderBy('tanggal_pemeriksaan')
                ->get()
                ->map(function ($item) {
                    // Pastikan angka
                    $item->berat_badan = (float) preg_replace('/[^0-9.]/', '', $item->berat_badan);
                    $item->tinggi_badan = (float) preg_replace('/[^0-9.]/', '', $item->tinggi_badan);
                    $item->tanggal_format = \Carbon\Carbon::parse($item->tanggal_pemeriksaan)->format('d M Y');
                    return $item;
                });
        }

        return view('ibu_hamil.dashboard', compact('periksaBayi'));
    }

    function edit(Identitas $identitas)
    {
        $data['detail'] = $identitas;
        return view('ibu_hamil.identitas.edit', $data);
    }
}
