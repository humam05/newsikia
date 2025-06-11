<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PeriksaRutin;
use App\Models\PeriksaTrimester;
use App\Models\Identitas; // Tambahkan ini
use Illuminate\Support\Facades\Auth;

class KesehatanIbuController extends Controller
{
    function indexRutin(Request $request)
    {
        // Ambil user yang sedang login
        $user = Auth::guard('ibuhamil')->user();

        // Pastikan user terotentikasi
        if (!$user) {
            return redirect()->route('login'); // Atau route login yang sesuai
        }

        // Ambil data identitas ibu hamil yang sedang login
        $identitas = Identitas::where('ibu_hamil_id', $user->id)->first();

        // Jika identitas tidak ditemukan, mungkin perlu redirect atau menampilkan pesan error
        if (!$identitas) {
            return redirect()->back()->with('error', 'Data identitas tidak ditemukan.');
        }

        // Ambil data periksa rutin yang terkait dengan identitas ibu hamil
        $query = PeriksaRutin::where('identitas_id', $identitas->id);

        // Jika ada pencarian
        if ($request->has('search')) {
            $search = $request->search;
            $query->where('nama_pemeriksaan', 'like', "%$search%")
                ->orWhere('hasil_pemeriksaan', 'like', "%$search%");
        }

        // Ambil data dengan urutan terbaru
        $periksaRutin = $query->latest()->get();

        // Kirim data ke view
        return view('ibu_hamil.kesehatan_ibu.periksa_rutin.index', compact('periksaRutin'));
    }


    function indexTrimester(Request $request)
    {
        // Ambil user yang sedang login
        $user = Auth::guard('ibuhamil')->user();

        // Pastikan user terotentikasi
        if (!$user) {
            return redirect()->route('login'); // Atau route login yang sesuai
        }

        // Ambil data identitas ibu hamil yang sedang login
        $identitas = Identitas::where('ibu_hamil_id', $user->id)->first();

        // Jika identitas tidak ditemukan, mungkin perlu redirect atau menampilkan pesan error
        if (!$identitas) {
            return redirect()->back()->with('error', 'Data identitas tidak ditemukan.');
        }

        // Ambil data periksa trimester yang terkait dengan identitas ibu hamil
        $query = PeriksaTrimester::where('identitas_id', $identitas->id);

        // Jika ada pencarian
        if ($request->has('search')) {
            $search = $request->search;
            $query->where('nama_pemeriksaan', 'like', "%$search%")
                ->orWhere('hasil_pemeriksaan', 'like', "%$search%");
        }

        // Ambil data dengan urutan terbaru
        $periksaTrimester = $query->latest()->get();

        // Kirim data ke view
        return view('ibu_hamil.kesehatan_ibu.periksa_trimester.index', compact('periksaTrimester'));
    }
}
