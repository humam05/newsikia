<?php

namespace App\Http\Controllers\Bumil;

use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identitas;
use Illuminate\Support\Facades\Auth;

class IdentitasController extends Controller
{
    // function index()
    // {
    //     $data['identitas'] = Identitas::all();
    //     return view('ibu_hamil.identitas.index', $data);
    // }

    // Redirect ke create atau edit sesuai data user
    function lengkapiData()
    {
        $user = Auth::guard('ibuhamil')->user();
        if (!$user) {
            return redirect('/login'); // atau route login ibuhamil kamu
        }

        $identitas = Identitas::where('ibu_hamil_id', $user->id)->first();

        if ($identitas) {
            // Kalau sudah ada data, redirect ke halaman edit
            return redirect()->route('identitas.edit', $identitas->id);
        } else {
            // Kalau belum ada data, redirect ke halaman create
            return redirect()->route('ibu_hamil.identitas.create');
        }
    }


    function index(Request $request)
    {
        $user = Auth::guard('ibuhamil')->user(); // ambil user yang login

        $query = Identitas::where('ibu_hamil_id', $user->id);
        $totalIbuHamil = $query->count();

        if ($request->has('search')) {
            $query->where('ibu_nik', 'like', '%' . $request->search . '%');
        }

        $identitas = $query->get();

        return view('ibu_hamil.identitas.index', compact('identitas', 'totalIbuHamil'));
    }

    function create()
    {
        return view('ibu_hamil.identitas.create');
    }

    function store(Request $request)
    {
        $request->validate([
            // Data Ibu (wajib hanya nama & nik)
            'ibu_nama' => 'required|string|max:255',
            'ibu_nik' => 'required|numeric|digits:16',
            'ibu_jkn' => 'nullable|string|max:255',
            'ibu_faskes_tk1' => 'nullable|string|max:255',
            'ibu_faskes_rujukan' => 'nullable|string|max:255',
            'ibu_ttl' => 'nullable|string|max:255',
            'ibu_pendidikan' => 'nullable|string|max:255',
            'ibu_pekerjaan' => 'nullable|string|max:255',
            'ibu_gol_darah' => 'nullable|string|max:3',
            'ibu_telepon' => 'nullable|string|max:15',
            'ibu_alamat' => 'nullable|string|max:500',
            'ibu_asuransi_lain' => 'nullable|string|max:255',
            'ibu_asuransi_nomor' => 'nullable|string|max:255',
            'ibu_asuransi_berlaku' => 'nullable|date',

            // Data Suami (wajib hanya nama & nik)
            'suami_nama' => 'required|string|max:255',
            'suami_nik' => 'required|numeric|digits:16',
            'suami_jkn' => 'nullable|string|max:255',
            'suami_faskes_tk1' => 'nullable|string|max:255',
            'suami_faskes_rujukan' => 'nullable|string|max:255',
            'suami_ttl' => 'nullable|string|max:255',
            'suami_pendidikan' => 'nullable|string|max:255',
            'suami_pekerjaan' => 'nullable|string|max:255',
            'suami_gol_darah' => 'nullable|string|max:3',
            'suami_telepon' => 'nullable|string|max:15',
            'suami_alamat' => 'nullable|string|max:500',
            'suami_asuransi_lain' => 'nullable|string|max:255',
            'suami_asuransi_nomor' => 'nullable|string|max:255',
            'suami_asuransi_berlaku' => 'nullable|date',

            // Data Anak (opsional semua)
            'anak_nama' => 'nullable|string|max:255',
            'anak_nik' => 'nullable|numeric|digits:16',
            'anak_jkn' => 'nullable|string|max:255',
            'anak_faskes_tk1' => 'nullable|string|max:255',
            'anak_faskes_rujukan' => 'nullable|string|max:255',
            'anak_tempat_lahir' => 'nullable|string|max:255',
            'anak_tanggal_lahir' => 'nullable|date',
            'anak_alamat' => 'nullable|string|max:500',
            'anak_ke' => 'nullable|numeric',
            'anak_akta_kelahiran' => 'nullable|string|max:255',
            'anak_gol_darah' => 'nullable|string|max:3',

            // Fasilitas Kesehatan (opsional semua)
            'puskesmas' => 'nullable|string|max:255',
            'kohort_ibu' => 'nullable|string|max:255',
            'kohort_bayi' => 'nullable|string|max:255',
            'kohort_balita' => 'nullable|string|max:255',
            'medik_rs' => 'nullable|string|max:255',
        ]);

        // Ambil data dari form dan tambahkan ID ibu hamil yang sedang login
        $data = $request->all();
        $data['ibu_hamil_id'] = Auth::guard('ibuhamil')->id();

        Identitas::create($data);

        return redirect('ibu_hamil/identitas')->with('success', 'Data berhasil disimpan.');
    }


    function show(Identitas $identitas)
    {
        $data['detail'] = $identitas;
        return view('ibu_hamil.identitas.show', compact('identitas'));
    }

    function edit(Identitas $identitas)
    {
        $data['detail'] = $identitas;
        return view('ibu_hamil.identitas.edit', $data);
    }

    function update(Request $request, Identitas $identitas)
    {
        $request->validate([
            // Data Ibu
            'ibu_nama' => 'required|string|max:255',
            'ibu_nik' => 'required|numeric|digits:16',
            'ibu_jkn' => 'nullable|string|max:255',
            'ibu_faskes_tk1' => 'nullable|string|max:255',
            'ibu_faskes_rujukan' => 'nullable|string|max:255',
            'ibu_ttl' => 'nullable|string|max:255',
            'ibu_pendidikan' => 'nullable|string|max:255',
            'ibu_pekerjaan' => 'nullable|string|max:255',
            'ibu_gol_darah' => 'nullable|string|max:3',
            'ibu_telepon' => 'nullable|string|max:15',
            'ibu_alamat' => 'nullable|string|max:500',
            'ibu_asuransi_lain' => 'nullable|string|max:255',
            'ibu_asuransi_nomor' => 'nullable|string|max:255',
            'ibu_asuransi_berlaku' => 'nullable|date',

            // Data Suami
            'suami_nama' => 'required|string|max:255',
            'suami_nik' => 'required|numeric|digits:16',
            'suami_jkn' => 'nullable|string|max:255',
            'suami_faskes_tk1' => 'nullable|string|max:255',
            'suami_faskes_rujukan' => 'nullable|string|max:255',
            'suami_ttl' => 'nullable|string|max:255',
            'suami_pendidikan' => 'nullable|string|max:255',
            'suami_pekerjaan' => 'nullable|string|max:255',
            'suami_gol_darah' => 'nullable|string|max:3',
            'suami_telepon' => 'nullable|string|max:15',
            'suami_alamat' => 'nullable|string|max:500',
            'suami_asuransi_lain' => 'nullable|string|max:255',
            'suami_asuransi_nomor' => 'nullable|string|max:255',
            'suami_asuransi_berlaku' => 'nullable|date',

            // Data Anak
            'anak_nama' => 'nullable|string|max:255',
            'anak_nik' => 'nullable|numeric|digits:16',
            'anak_jkn' => 'nullable|string|max:255',
            'anak_faskes_tk1' => 'nullable|string|max:255',
            'anak_faskes_rujukan' => 'nullable|string|max:255',
            'anak_tempat_lahir' => 'nullable|string|max:255',
            'anak_tanggal_lahir' => 'nullable|date',
            'anak_alamat' => 'nullable|string|max:500',
            'anak_ke' => 'nullable|numeric',
            'anak_akta_kelahiran' => 'nullable|string|max:255',
            'anak_gol_darah' => 'nullable|string|max:3',

            // Fasilitas Kesehatan
            'puskesmas' => 'nullable|string|max:255',
            'kohort_ibu' => 'nullable|string|max:255',
            'kohort_bayi' => 'nullable|string|max:255',
            'kohort_balita' => 'nullable|string|max:255',
            'medik_rs' => 'nullable|string|max:255',
        ]);

        $data = $request->except(['ibu_hamil_id']); // agar tidak bisa ubah ID user

        $identitas->update($data);

        return redirect('ibu_hamil/identitas')->with('success', 'Data berhasil diperbarui.');
    }


    function delete(Identitas $identitas)
    {
        $identitas->delete();
        return redirect('ibu_hamil/identitas')->with('success', 'Data berhasil dihapus.');
    }
}
