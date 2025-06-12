<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PeriksaRutin;
use App\Models\PeriksaTrimester;
use App\Models\Identitas;
use Illuminate\Support\Facades\Auth;

class KesehatanIbuController extends Controller
{
    function indexRutin()
    {
        $login = Auth::guard('ibuhamil')->user();
        $identitas = Identitas::where('ibu_hamil_id', $login->id)->first();
        $data['periksa_rutin'] = PeriksaRutin::where('identitas_id', $identitas->id)->with('identitas')->get();

        return view('ibu_hamil.kesehatan_ibu.periksa_rutin.index', $data);
    }

    function indexTrimester()
    {
        $login = Auth::guard('ibuhamil')->user();
        $identitas = Identitas::where('ibu_hamil_id', $login->id)->first();
        $data['periksa_trimester'] = PeriksaTrimester::where('identitas_id', $identitas->id)->with('identitas')->get();

        return view('ibu_hamil.kesehatan_ibu.periksa_trimester.index', $data);
    }

    function showRutin(PeriksaRutin $periksaRutin)
    {
        // Pastikan relasi 'identitas' dimuat
        $periksaRutin->load('identitas');

        return view('ibu_hamil.kesehatan_ibu.periksa_rutin.show', [
            'periksaRutin' => $periksaRutin
        ]);
    }

    function showTrimester(PeriksaTrimester $periksaTrimester)
    {
        // Sama seperti showRutin, muat relasi 'identitas'
        $periksaTrimester->load('identitas');

        return view('ibu_hamil.kesehatan_ibu.periksa_trimester.show', [
            'periksaTrimester' => $periksaTrimester
        ]);
    }
}
