<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identitas;
use App\Models\PeriksaRutin;
use App\Models\PeriksaTrimester;
use App\Models\IbuHamil;


class AdminIbuHamilController extends Controller
{
    function identitasIndex(Request $request)
    {
        $query = Identitas::query();

        if ($request->has('search')) {
            $query->where('ibu_nik', 'like', '%' . $request->search . '%');
        }

        $data['identitas'] = $query->paginate(10);
        return view('admin.ibu_hamil.identitas.index', $data);
    }

    function identitasCreate()
    {
        return view('admin.ibu_hamil.identitas.create');
    }

    function identitasStore(Request $request)
    {

        // Validasi input
        $request->validate([
            'ibu_nama' => 'required|string|max:255',
            'ibu_nik' => 'required|numeric|unique:tb_identitas,ibu_nik',
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
            'suami_nik' => 'required|numeric',
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
            'anak_nik' => 'nullable|numeric',
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

        return redirect('admin/ibu_hamil/identitas')->with('success', 'Data berhasil disimpan.');
    }

    function identitasShow(Identitas $identitas)
    {
        $data['detail'] = $identitas;
        return view('admin.ibu_hamil.identitas.show', compact('identitas'));
    }

    function identitasEdit(Identitas $identitas)
    {
        $data['detail'] = $identitas;
        return view('admin.ibu_hamil.identitas.edit', $data);
    }

    function identitasUpdate(Request $request, Identitas $identitas)
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
            return redirect('admin/ibu_hamil/identitas');
        } else {
            return back()->with('error', 'gagal !');
        }
    }
    function identitasDelete(Identitas $identitas)
    {
        $identitas->delete();
        return redirect('admin/ibu_hamil/identitas')->with('success', 'Data berhasil dihapus.');
    }

    function periksaCreate(Request $request)
    {
        $identitasId = $request->id;
        $dataIdentitas = Identitas::findOrFail($identitasId); // Ambil data berdasarkan ID

        // Lanjutkan dengan logika lain (misalnya, tampilkan form periksa)
        return view('admin.ibu_hamil.periksa.create', compact('dataIdentitas'));
    }


    // FUNCTION PERIKSA RUTIN

    function periksaRutinIndex(Request $request)
    {
        $query = PeriksaRutin::with('identitas'); // load relasi identitas

        if ($request->has('search')) {
            $search = $request->search;
            $query->whereHas('identitas', function ($q) use ($search) {
                $q->where('ibu_nik', 'like', '%' . $search . '%');
            });
        }

        // Tambahkan pagination
        $data['periksa_rutin'] = $query->paginate(10);

        return view('admin.ibu_hamil.periksa_rutin.index', $data);
    }


    function periksaRutinCreate(Request $request, $identitas)
    {
        $identitas = Identitas::findOrFail($identitas);
        return view('admin.ibu_hamil.periksa_rutin.create', compact('identitas'));
    }

    function periksaRutinStore(Request $request)
    {

        // Validasi data yang masuk
        $request->validate([
            'identitas_id'      => 'required|exists:tb_identitas,id',
            'tanggal_periksa'   => 'required|date',
            'berat_badan'       => 'nullable|numeric',
            'tinggi_badan'      => 'nullable|numeric',
            'lingkar_lengan'    => 'nullable|numeric',
            'tekanan_darah'     => 'nullable|string',
            'umur_kehamilan'    => 'nullable|integer',
            'tfu'               => 'nullable|numeric',
            'djj'               => 'nullable|integer',
            'gerakan_janin'     => 'nullable|in:ada,tidak_ada',
            'posisi_janin'      => 'nullable|in:kepala,sungsang,lintang',
            'kaki_bengkak'      => 'nullable|string',
            'keluhan'           => 'nullable|string',
            'tindakan'          => 'nullable|string',
            'catatan'           => 'nullable|string',
        ]);

        // Simpan ke database
        $periksa = new PeriksaRutin;
        $periksa->identitas_id     = $request->identitas_id;
        $periksa->tanggal_periksa  = $request->tanggal_periksa;
        $periksa->berat_badan      = $request->berat_badan;
        $periksa->tinggi_badan     = $request->tinggi_badan;
        $periksa->lingkar_lengan   = $request->lingkar_lengan;
        $periksa->tekanan_darah    = $request->tekanan_darah;
        $periksa->umur_kehamilan   = $request->umur_kehamilan;
        $periksa->tfu              = $request->tfu;
        $periksa->djj              = $request->djj;
        $periksa->gerakan_janin    = $request->gerakan_janin;
        $periksa->posisi_janin     = $request->posisi_janin;
        $periksa->kaki_bengkak     = $request->kaki_bengkak;
        $periksa->keluhan          = $request->keluhan;
        $periksa->tindakan         = $request->tindakan;
        $periksa->catatan          = $request->catatan;



        // Simpan ke database
        $periksa->save();

        return redirect('admin/ibu_hamil/periksa_rutin')->with('success', 'Data berhasil disimpan.');
    }

    function periksaRutinShow(PeriksaRutin $periksaRutin)
    {
        // Pastikan relasi identitas ikut dimuat
        $periksaRutin->load('identitas');

        return view('admin.ibu_hamil.periksa_rutin.show', [
            'periksaRutin' => $periksaRutin
        ]);
    }

    function periksaRutinEdit(PeriksaRutin $periksaRutin)
    {
        // Load relasi identitas agar bisa ditampilkan di form
        $periksaRutin->load('identitas');

        return view('admin.ibu_hamil.periksa_rutin.edit', compact('periksaRutin'));
    }

    function periksaRutinUpdate(Request $request, PeriksaRutin $periksaRutin)
    {
        // Validasi data input
        $request->validate([
            'tanggal_periksa'   => 'required|date',
            'berat_badan'       => 'nullable|numeric',
            'tinggi_badan'      => 'nullable|numeric',
            'lingkar_lengan'    => 'nullable|numeric',
            'tekanan_darah'     => 'nullable|string',
            'umur_kehamilan'    => 'nullable|integer',
            'tfu'               => 'nullable|numeric',
            'djj'               => 'nullable|integer',
            'gerakan_janin'     => 'nullable|in:ada,tidak_ada',
            'posisi_janin'      => 'nullable|in:kepala,sungsang,lintang',
            'kaki_bengkak'      => 'nullable|string',
            'keluhan'           => 'nullable|string',
            'tindakan'          => 'nullable|string',
            'catatan'           => 'nullable|string',
        ]);

        // Update data
        $periksaRutin->tanggal_periksa  = $request->tanggal_periksa;
        $periksaRutin->berat_badan      = $request->berat_badan;
        $periksaRutin->tinggi_badan     = $request->tinggi_badan;
        $periksaRutin->lingkar_lengan   = $request->lingkar_lengan;
        $periksaRutin->tekanan_darah    = $request->tekanan_darah;
        $periksaRutin->umur_kehamilan   = $request->umur_kehamilan;
        $periksaRutin->tfu              = $request->tfu;
        $periksaRutin->djj              = $request->djj;
        $periksaRutin->gerakan_janin    = $request->gerakan_janin;
        $periksaRutin->posisi_janin     = $request->posisi_janin;
        $periksaRutin->kaki_bengkak     = $request->kaki_bengkak;
        $periksaRutin->keluhan          = $request->keluhan;
        $periksaRutin->tindakan         = $request->tindakan;
        $periksaRutin->catatan          = $request->catatan;

        $periksaRutin->save();

        return redirect('admin/ibu_hamil/periksa_rutin')->with('success', 'Data berhasil diperbarui.');
    }

    function periksaRutinDelete(PeriksaRutin $periksaRutin)
    {
        $periksaRutin->delete();
        return redirect('admin/ibu_hamil/periksa_rutin')->with('success', 'Data berhasil dihapus.');
    }


    //PERIKSA TRIMESTER

    function periksaTrimesterIndex(Request $request)
    {
        $query = PeriksaTrimester::with('identitas');

        if ($request->has('search')) {
            $search = $request->search;
            $query->whereHas('identitas', function ($q) use ($search) {
                $q->where('ibu_nik', 'like', '%' . $search . '%');
            });
        }

        // Ganti dari get() menjadi paginate(10)
        $data['periksa_trimester'] = $query->paginate(10);

        return view('admin.ibu_hamil.periksa_trimester.index', $data);
    }


    function periksaTrimesterCreate(Request $request, $identitas)
    {
        $identitas = Identitas::findOrFail($identitas);
        return view('admin.ibu_hamil.periksa_trimester.create', compact('identitas'));
    }

    public function periksaTrimesterStore(Request $request)
    {

        $periksaTrimester = new PeriksaTrimester;
        $periksaTrimester->identitas_id = $request->identitas_id;
        $periksaTrimester->tanggal_periksa = $request->tanggal_periksa;
        $periksaTrimester->tanggal_periksa_2 = $request->tanggal_periksa_2;
        $periksaTrimester->tanggal_periksa_3 = $request->tanggal_periksa_3;
        $periksaTrimester->trimester = $request->trimester;
        $periksaTrimester->konjungtiva = $request->konjungtiva;
        $periksaTrimester->sklera = $request->sklera;
        $periksaTrimester->kulit = $request->kulit;
        $periksaTrimester->leher = $request->leher;
        $periksaTrimester->gigi_mulut = $request->gigi_mulut;
        $periksaTrimester->tht = $request->tht;
        $periksaTrimester->dada = $request->dada;
        $periksaTrimester->paru = $request->paru;
        $periksaTrimester->perut = $request->perut;
        $periksaTrimester->tungkai = $request->tungkai;
        $periksaTrimester->hpht = $request->hpht;
        $periksaTrimester->keterangan_haid = $request->keterangan_haid;
        $periksaTrimester->umur_kehamilan_hpht = $request->umur_kehamilan_hpht;
        $periksaTrimester->hpl_hpht = $request->hpl_hpht;
        $periksaTrimester->umur_kehamilan_usg = $request->umur_kehamilan_usg;
        $periksaTrimester->hpl_usg = $request->hpl_usg;
        $periksaTrimester->jumlah_gs = $request->jumlah_gs;
        $periksaTrimester->diameter_gs = $request->diameter_gs;
        $periksaTrimester->umur_diameter_gs = $request->umur_diameter_gs;
        $periksaTrimester->jumlah_bayi = $request->jumlah_bayi;
        $periksaTrimester->crl = $request->crl;
        $periksaTrimester->umur_crl = $request->umur_crl;
        $periksaTrimester->letak_produk_kehamilan = $request->letak_produk_kehamilan;
        $periksaTrimester->pulsasi_jantung = $request->pulsasi_jantung;
        $periksaTrimester->temuan_abnormal = $request->temuan_abnormal;
        $periksaTrimester->temuan_abnormal_sebutkan = $request->temuan_abnormal_sebutkan;
        $periksaTrimester->hemoglobin = $request->hemoglobin;
        $periksaTrimester->golongan_darah = $request->golongan_darah;
        $periksaTrimester->rhesus = $request->rhesus;
        $periksaTrimester->gula_darah_sewaktu = $request->gula_darah_sewaktu;
        $periksaTrimester->hasil_h = $request->hasil_h;
        $periksaTrimester->hasil_s = $request->hasil_s;
        $periksaTrimester->hasil_hepatitis_b = $request->hasil_hepatitis_b;
        $periksaTrimester->skrining_kesehatan_jiwa = $request->skrining_kesehatan_jiwa;
        $periksaTrimester->tindak_lanjut_jiwa = $request->tindak_lanjut_jiwa;
        $periksaTrimester->perlu_rujukan = $request->perlu_rujukan;
        $periksaTrimester->kesimpulan = $request->kesimpulan;
        $periksaTrimester->rekomendasi = $request->rekomendasi;
        $periksaTrimester->presentasi_bayi = $request->presentasi_bayi;
        $periksaTrimester->keadaan_bayi = $request->keadaan_bayi;
        $periksaTrimester->djj = $request->djj;
        $periksaTrimester->irama_djj = $request->irama_djj;
        $periksaTrimester->lokasi_plasenta = $request->lokasi_plasenta;
        $periksaTrimester->jumlah_cairan_ketuban = $request->jumlah_cairan_ketuban;
        $periksaTrimester->sdp = $request->sdp;
        $periksaTrimester->bpd = $request->bpd;
        $periksaTrimester->bpd_sesuai = $request->bpd_sesuai;
        $periksaTrimester->hc = $request->hc;
        $periksaTrimester->hc_sesuai = $request->hc_sesuai;
        $periksaTrimester->ac = $request->ac;
        $periksaTrimester->ac_sesuai = $request->ac_sesuai;
        $periksaTrimester->fl = $request->fl;
        $periksaTrimester->fl_sesuai = $request->fl_sesuai;
        $periksaTrimester->efw_tbj = $request->efw_tbj;
        $periksaTrimester->efw_tbj_sesuai = $request->efw_tbj_sesuai;
        $periksaTrimester->rencana_konsultasi = $request->rencana_konsultasi;
        $periksaTrimester->rencana_melahirkan = $request->rencana_melahirkan;
        $periksaTrimester->rencana_kontrasepsi = $request->rencana_kontrasepsi;
        $periksaTrimester->konseling = $request->konseling;
        $periksaTrimester->keluhan = $request->keluhan;
        $periksaTrimester->pemeriksaan = $request->pemeriksaan;
        $periksaTrimester->tindakan = $request->tindakan;
        $periksaTrimester->saran = $request->saran;
        $periksaTrimester->tanggal_kembali = $request->tanggal_kembali;
        $periksaTrimester->tanggal_periksa_2 = $request->tanggal_periksa_2;
        $periksaTrimester->tanggal_periksa_3 = $request->tanggal_periksa_3;
        $periksaTrimester->usg_trimester_3 = $request->usg_trimester_3;
        $periksaTrimester->protein_urin = $request->protein_urin;
        $periksaTrimester->urin_reduksi = $request->urin_reduksi;
        $periksaTrimester->tempat_melahirkan = $request->tempat_melahirkan;
        $periksaTrimester->penjelasan = $request->penjelasan;

        // Simpan ke database
        $periksaTrimester->save();



        return redirect('admin/ibu_hamil/periksa_trimester')->with('success', 'Data pemeriksaan trimester berhasil disimpan.');
    }

    function periksaTrimesterShow(PeriksaTrimester $periksaTrimester)
    {
        $periksaTrimester->load('identitas');

        // Ambil semua kolom dari model
        $fields = $periksaTrimester->getAttributes();

        // Filter hanya yang terisi
        $filledFields = collect($fields)->filter(function ($value) {
            return !is_null($value) && $value !== '';
        });

        return view('admin.ibu_hamil.periksa_trimester.show', [
            'filledFields' => $filledFields,
            'periksaTrimester' => $periksaTrimester,
        ]);
    }




    function periksaTrimesterEdit(PeriksaTrimester $periksaTrimester)
    {
        // Load relasi identitas agar bisa ditampilkan di form
        $periksaTrimester->load('identitas');

        return view('admin.ibu_hamil.periksa_trimester.edit', compact('periksaTrimester'));
    }

    public function periksaTrimesterUpdate(Request $request, PeriksaTrimester $periksaTrimester)
    {

        // Update data satu per satu
        $periksaTrimester->tanggal_periksa = $request->tanggal_periksa;
        $periksaTrimester->tanggal_periksa_2 = $request->tanggal_periksa_2;
        $periksaTrimester->tanggal_periksa_3 = $request->tanggal_periksa_3;
        $periksaTrimester->trimester = $request->trimester;
        $periksaTrimester->konjungtiva = $request->konjungtiva;
        $periksaTrimester->sklera = $request->sklera;
        $periksaTrimester->kulit = $request->kulit;
        $periksaTrimester->leher = $request->leher;
        $periksaTrimester->gigi_mulut = $request->gigi_mulut;
        $periksaTrimester->tht = $request->tht;
        $periksaTrimester->dada = $request->dada;
        $periksaTrimester->paru = $request->paru;
        $periksaTrimester->perut = $request->perut;
        $periksaTrimester->tungkai = $request->tungkai;
        $periksaTrimester->hpht = $request->hpht;
        $periksaTrimester->keterangan_haid = $request->keterangan_haid;
        $periksaTrimester->umur_kehamilan_hpht = $request->umur_kehamilan_hpht;
        $periksaTrimester->hpl_hpht = $request->hpl_hpht;
        $periksaTrimester->umur_kehamilan_usg = $request->umur_kehamilan_usg;
        $periksaTrimester->hpl_usg = $request->hpl_usg;
        $periksaTrimester->jumlah_gs = $request->jumlah_gs;
        $periksaTrimester->diameter_gs = $request->diameter_gs;
        $periksaTrimester->umur_diameter_gs = $request->umur_diameter_gs;
        $periksaTrimester->jumlah_bayi = $request->jumlah_bayi;
        $periksaTrimester->crl = $request->crl;
        $periksaTrimester->umur_crl = $request->umur_crl;
        $periksaTrimester->letak_produk_kehamilan = $request->letak_produk_kehamilan;
        $periksaTrimester->pulsasi_jantung = $request->pulsasi_jantung;
        $periksaTrimester->temuan_abnormal = $request->temuan_abnormal;
        $periksaTrimester->temuan_abnormal_sebutkan = $request->temuan_abnormal_sebutkan;
        $periksaTrimester->hemoglobin = $request->hemoglobin;
        $periksaTrimester->golongan_darah = $request->golongan_darah;
        $periksaTrimester->rhesus = $request->rhesus;
        $periksaTrimester->gula_darah_sewaktu = $request->gula_darah_sewaktu;
        $periksaTrimester->hasil_h = $request->hasil_h;
        $periksaTrimester->hasil_s = $request->hasil_s;
        $periksaTrimester->hasil_hepatitis_b = $request->hasil_hepatitis_b;
        $periksaTrimester->skrining_kesehatan_jiwa = $request->skrining_kesehatan_jiwa;
        $periksaTrimester->tindak_lanjut_jiwa = $request->tindak_lanjut_jiwa;
        $periksaTrimester->perlu_rujukan = $request->perlu_rujukan;
        $periksaTrimester->kesimpulan = $request->kesimpulan;
        $periksaTrimester->rekomendasi = $request->rekomendasi;
        $periksaTrimester->presentasi_bayi = $request->presentasi_bayi;
        $periksaTrimester->keadaan_bayi = $request->keadaan_bayi;
        $periksaTrimester->djj = $request->djj;
        $periksaTrimester->irama_djj = $request->irama_djj;
        $periksaTrimester->lokasi_plasenta = $request->lokasi_plasenta;
        $periksaTrimester->jumlah_cairan_ketuban = $request->jumlah_cairan_ketuban;
        $periksaTrimester->sdp = $request->sdp;
        $periksaTrimester->bpd = $request->bpd;
        $periksaTrimester->bpd_sesuai = $request->bpd_sesuai;
        $periksaTrimester->hc = $request->hc;
        $periksaTrimester->hc_sesuai = $request->hc_sesuai;
        $periksaTrimester->ac = $request->ac;
        $periksaTrimester->ac_sesuai = $request->ac_sesuai;
        $periksaTrimester->fl = $request->fl;
        $periksaTrimester->fl_sesuai = $request->fl_sesuai;
        $periksaTrimester->efw_tbj = $request->efw_tbj;
        $periksaTrimester->efw_tbj_sesuai = $request->efw_tbj_sesuai;
        $periksaTrimester->rencana_konsultasi = $request->rencana_konsultasi;
        $periksaTrimester->rencana_melahirkan = $request->rencana_melahirkan;
        $periksaTrimester->rencana_kontrasepsi = $request->rencana_kontrasepsi;
        $periksaTrimester->konseling = $request->konseling;
        $periksaTrimester->keluhan = $request->keluhan;
        $periksaTrimester->pemeriksaan = $request->pemeriksaan;
        $periksaTrimester->tindakan = $request->tindakan;
        $periksaTrimester->saran = $request->saran;
        $periksaTrimester->tanggal_kembali = $request->tanggal_kembali;
        $periksaTrimester->tanggal_periksa_2 = $request->tanggal_periksa_2;
        $periksaTrimester->tanggal_periksa_3 = $request->tanggal_periksa_3;
        $periksaTrimester->usg_trimester_3 = $request->usg_trimester_3;
        $periksaTrimester->protein_urin = $request->protein_urin;
        $periksaTrimester->urin_reduksi = $request->urin_reduksi;
        $periksaTrimester->tempat_melahirkan = $request->tempat_melahirkan;
        $periksaTrimester->penjelasan = $request->penjelasan;


        // Simpan perubahan
        $periksaTrimester->save();

        // Redirect dengan pesan sukses
        return redirect('admin/ibu_hamil/periksa_trimester')->with('success', 'Data pemeriksaan trimester berhasil diperbarui.');
    }

    function periksaTrimesterDelete(PeriksaTrimester $periksaTrimester)
    {
        $periksaTrimester->delete();
        return redirect('admin/ibu_hamil/periksa_trimester')->with('success', 'Data berhasil dihapus.');
    }
}
