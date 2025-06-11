<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Identitas;

class IdentitasController extends Controller
{
    // public function index(Request $request)
    // {
    //     $user = Auth::guard('ibuhamil')->user();

    //     $query = Identitas::where('ibu_hamil_id', $user->id);
    //     $totalIbuHamil = $query->count();

    //     if ($request->has('search') && !empty($request->search)) {
    //         $query->where('ibu_nik', 'like', '%' . $request->search . '%');
    //     }

    //     $identitas = $query->get();

    //     return view('ibu_hamil.identitas.index', compact('identitas', 'totalIbuHamil'));
    // }
     public function index(Request $request)
    {
        $user = Auth::guard('ibuhamil')->user();
        // Pastikan user terotentikasi
        if (!$user) {
            return redirect()->route('login'); // Atau route login yang sesuai
        }
        $query = Identitas::where('ibu_hamil_id', $user->id);
        $totalIbuHamil = $query->count();
        if ($request->has('search') && !empty($request->search)) {
            $query->where('ibu_nik', 'like', '%' . $request->search . '%');
        }
        $identitas = $query->get();
        return view('ibu_hamil.identitas.index', compact('identitas', 'totalIbuHamil'));
    }

    public function create()
    {
        return view('ibu_hamil.identitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
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

            'puskesmas' => 'nullable|string|max:255',
            'kohort_ibu' => 'nullable|string|max:255',
            'kohort_bayi' => 'nullable|string|max:255',
            'kohort_balita' => 'nullable|string|max:255',
            'medik_rs' => 'nullable|string|max:255',
        ]);

        $data = $request->all();
        $data['ibu_hamil_id'] = Auth::guard('ibuhamil')->id();

        Identitas::create($data);

        return redirect()->route('ibu_hamil.identitas.index')->with('success', 'Data berhasil disimpan.');
    }

    // public function show(Identitas $identitas)
    // {
    //     $user = Auth::guard('ibuhamil')->user();
    //     if ($identitas->ibu_hamil_id !== $user->id) {
    //         abort(403, 'Akses tidak diizinkan.');
    //     }

    //     return view('ibu_hamil.identitas.show', ['identitas' => $identitas]);
    // }

    public function show(Identitas $identitas)
    {
        $user = Auth::guard('ibuhamil')->user();
        // Pastikan user terotentikasi
        if (!$user) {
            return redirect()->route('login'); // Atau route login yang sesuai
        }
        // Verifikasi apakah identitas ini milik ibu hamil yang sedang login
        if ($identitas->ibu_hamil_id !== $user->id) {
            abort(403, 'Anda tidak memiliki izin untuk melihat data ini.');
        }
        return view('ibu_hamil.identitas.show', compact('identitas'));
    }

    public function edit(Identitas $identitas)
    {
        $user = Auth::guard('ibuhamil')->user();
        if ($identitas->ibu_hamil_id !== $user->id) {
            abort(403, 'Akses tidak diizinkan.');
        }

        return view('ibu_hamil.identitas.edit', ['detail' => $identitas]);
    }

    public function update(Request $request, Identitas $identitas)
    {
        $user = Auth::guard('ibuhamil')->user();
        if ($identitas->ibu_hamil_id !== $user->id) {
            abort(403, 'Akses tidak diizinkan.');
        }

        $request->validate([
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

            'puskesmas' => 'nullable|string|max:255',
            'kohort_ibu' => 'nullable|string|max:255',
            'kohort_bayi' => 'nullable|string|max:255',
            'kohort_balita' => 'nullable|string|max:255',
            'medik_rs' => 'nullable|string|max:255',
        ]);

        $data = $request->except(['ibu_hamil_id']);
        $identitas->update($data);

        return redirect()->route('ibu_hamil.identitas.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function delete(Identitas $identitas)
    {
        $user = Auth::guard('ibuhamil')->user();
        if ($identitas->ibu_hamil_id !== $user->id) {
            abort(403, 'Akses tidak diizinkan.');
        }

        $identitas->delete();

        return redirect()->route('ibu_hamil.identitas.index')->with('success', 'Data berhasil dihapus.');
    }
}
