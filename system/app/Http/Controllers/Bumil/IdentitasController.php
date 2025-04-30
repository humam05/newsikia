<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identitas;

class IdentitasController extends Controller
{
    function index()
    {
        $data['identitas'] = Identitas::all();
        return view('ibu_hamil.identitas.index', $data);
    }

    function create()
    {
        return view('ibu_hamil.identitas.create');
    }

    function store(Request $request)
    {

        // Validasi input
        $request->validate([
            'ibu_nama' => 'required|string|max:255',
            'ibu_nik' => 'required|numeric|unique:tb_identitas,ibu_nik',
            'ibu_jkn' => 'required|string|max:255',
            'ibu_faskes_tk1' => 'required|string|max:255',
            'ibu_faskes_rujukan' => 'required|string|max:255',
            'ibu_ttl' => 'required|string|max:255',
            'ibu_pendidikan' => 'required|string|max:255',
            'ibu_pekerjaan' => 'required|string|max:255',
            'ibu_gol_darah' => 'required|string|max:3',
            'ibu_telepon' => 'required|string|max:15',
            'ibu_alamat' => 'required|string|max:500',
            'ibu_asuransi_lain' => 'required|string|max:255',
            'ibu_asuransi_nomor' => 'required|string|max:255',
            'ibu_asuransi_berlaku' => 'required|date',
            'suami_nama' => 'required|string|max:255',
            'suami_nik' => 'required|numeric',
            'suami_jkn' => 'required|string|max:255',
            'suami_faskes_tk1' => 'required|string|max:255',
            'suami_faskes_rujukan' => 'required|string|max:255',
            'suami_ttl' => 'required|string|max:255',
            'suami_pendidikan' => 'required|string|max:255',
            'suami_pekerjaan' => 'required|string|max:255',
            'suami_gol_darah' => 'required|string|max:3',
            'suami_telepon' => 'required|string|max:15',
            'suami_alamat' => 'required|string|max:500',
            'suami_asuransi_lain' => 'required|string|max:255',
            'suami_asuransi_nomor' => 'required|string|max:255',
            'suami_asuransi_berlaku' => 'required|date',
            'anak_nama' => 'required|string|max:255',
            'anak_nik' => 'required|numeric',
            'anak_jkn' => 'required|string|max:255',
            'anak_faskes_tk1' => 'required|string|max:255',
            'anak_faskes_rujukan' => 'required|string|max:255',
            'anak_tempat_lahir' => 'required|string|max:255',
            'anak_tanggal_lahir' => 'required|date',
            'anak_alamat' => 'required|string|max:500',
            'anak_ke' => 'required|numeric',
            'anak_akta_kelahiran' => 'required|string|max:255',
            'anak_gol_darah' => 'required|string|max:3',
            'puskesmas' => 'required|string|max:255',
            'kohort_ibu' => 'required|string|max:255',
            'kohort_bayi' => 'required|string|max:255',
            'kohort_balita' => 'required|string|max:255',
            'medik_rs' => 'required|string|max:255',
        ]);

        // Menyimpan data ke dalam database
        $identitas = new Identitas;
        $identitas->ibu_nama = $request->ibu_nama;
        $identitas->ibu_nik = $request->ibu_nik;
        $identitas->ibu_jkn = $request->ibu_jkn;
        $identitas->ibu_faskes_tk1 = $request->ibu_faskes_tk1;
        $identitas->ibu_faskes_rujukan = $request->ibu_faskes_rujukan;
        $identitas->ibu_ttl = $request->ibu_ttl;
        $identitas->ibu_pendidikan = $request->ibu_pendidikan;
        $identitas->ibu_pekerjaan = $request->ibu_pekerjaan;
        $identitas->ibu_gol_darah = $request->ibu_gol_darah;
        $identitas->ibu_telepon = $request->ibu_telepon;
        $identitas->ibu_alamat = $request->ibu_alamat;
        $identitas->ibu_asuransi_lain = $request->ibu_asuransi_lain;
        $identitas->ibu_asuransi_nomor = $request->ibu_asuransi_nomor;
        $identitas->ibu_asuransi_berlaku = $request->ibu_asuransi_berlaku;
        $identitas->suami_nama = $request->suami_nama;
        $identitas->suami_nik = $request->suami_nik;
        $identitas->suami_jkn = $request->suami_jkn;
        $identitas->suami_faskes_tk1 = $request->suami_faskes_tk1;
        $identitas->suami_faskes_rujukan = $request->suami_faskes_rujukan;
        $identitas->suami_ttl = $request->suami_ttl;
        $identitas->suami_pendidikan = $request->suami_pendidikan;
        $identitas->suami_pekerjaan = $request->suami_pekerjaan;
        $identitas->suami_gol_darah = $request->suami_gol_darah;
        $identitas->suami_telepon = $request->suami_telepon;
        $identitas->suami_alamat = $request->suami_alamat;
        $identitas->suami_asuransi_lain = $request->suami_asuransi_lain;
        $identitas->suami_asuransi_nomor = $request->suami_asuransi_nomor;
        $identitas->suami_asuransi_berlaku = $request->suami_asuransi_berlaku;
        $identitas->anak_nama = $request->anak_nama;
        $identitas->anak_nik = $request->anak_nik;
        $identitas->anak_jkn = $request->anak_jkn;
        $identitas->anak_faskes_tk1 = $request->anak_faskes_tk1;
        $identitas->anak_faskes_rujukan = $request->anak_faskes_rujukan;
        $identitas->anak_tempat_lahir = $request->anak_tempat_lahir;
        $identitas->anak_tanggal_lahir = $request->anak_tanggal_lahir;
        $identitas->anak_alamat = $request->anak_alamat;
        $identitas->anak_ke = $request->anak_ke;
        $identitas->anak_akta_kelahiran = $request->anak_akta_kelahiran;
        $identitas->anak_gol_darah = $request->anak_gol_darah;
        $identitas->puskesmas = $request->puskesmas;
        $identitas->kohort_ibu = $request->kohort_ibu;
        $identitas->kohort_bayi = $request->kohort_bayi;
        $identitas->kohort_balita = $request->kohort_balita;
        $identitas->medik_rs = $request->medik_rs;

        // Simpan data ke database
        $identitas->save();

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



        $identitas->ibu_nama = request('ibu_nama');
        $identitas->ibu_nik = request('ibu_nik');
        $identitas->ibu_jkn = request('ibu_jkn');
        $identitas->ibu_faskes_tk1 = request('ibu_faskes_tk1');
        $identitas->ibu_faskes_rujukan = request('ibu_faskes_rujukan');
        $identitas->ibu_ttl = request('ibu_ttl');
        $identitas->ibu_pendidikan = request('ibu_pendidikan');
        $identitas->ibu_pekerjaan = request('ibu_pekerjaan');
        $identitas->ibu_gol_darah = request('ibu_gol_darah');
        $identitas->ibu_telepon = request('ibu_telepon');
        $identitas->ibu_alamat = request('ibu_alamat');
        $identitas->ibu_asuransi_lain = request('ibu_asuransi_lain');
        $identitas->ibu_asuransi_nomor = request('ibu_asuransi_nomor');
        $identitas->ibu_asuransi_berlaku = request('ibu_asuransi_berlaku');
        $identitas->suami_nama = request('suami_nama');
        $identitas->suami_nik = request('suami_nik');
        $identitas->suami_jkn = request('suami_jkn');
        $identitas->suami_faskes_tk1 = request('suami_faskes_tk1');
        $identitas->suami_faskes_rujukan = request('suami_faskes_rujukan');
        $identitas->suami_ttl = request('suami_ttl');
        $identitas->suami_pendidikan = request('suami_pendidikan');
        $identitas->suami_pekerjaan = request('suami_pekerjaan');
        $identitas->suami_gol_darah = request('suami_gol_darah');
        $identitas->suami_telepon = request('suami_telepon');
        $identitas->suami_alamat = request('suami_alamat');
        $identitas->suami_asuransi_lain = request('suami_asuransi_lain');
        $identitas->suami_asuransi_nomor = request('suami_asuransi_nomor');
        $identitas->suami_asuransi_berlaku = request('suami_asuransi_berlaku');
        $identitas->anak_nama = request('anak_nama');
        $identitas->anak_nik = request('anak_nik');
        $identitas->anak_jkn = request('anak_jkn');
        $identitas->anak_faskes_tk1 = request('anak_faskes_tk1');
        $identitas->anak_faskes_rujukan = request('anak_faskes_rujukan');
        $identitas->anak_tempat_lahir = request('anak_tempat_lahir');
        $identitas->anak_tanggal_lahir = request('anak_tanggal_lahir');
        $identitas->anak_alamat = request('anak_alamat');
        $identitas->anak_ke = request('anak_ke');
        $identitas->anak_akta_kelahiran = request('anak_akta_kelahiran');
        $identitas->anak_gol_darah = request('anak_gol_darah');
        $identitas->puskesmas = request('puskesmas');
        $identitas->kohort_ibu = request('kohort_ibu');
        $identitas->kohort_bayi = request('kohort_bayi');
        $identitas->kohort_balita = request('kohort_balita');
        $identitas->medik_rs = request('medik_rs');
        $update = $identitas->update();
        if ($update) {
            return redirect('ibu_hamil/identitas');
        } else {
            return back()->with('error', 'gagal !');
        }
    }

    function delete(Identitas $identitas)
    {
        $identitas->delete();
        return redirect('ibu_hamil/identitas')->with('success', 'Data berhasil dihapus.');
    }
}
