<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bayi;
use Illuminate\Support\Facades\Auth;

use App\Models\Identitas;
use App\Models\PeriksaBayi;

class BayiController extends Controller
{
    function index()
    {
        $data['bayi'] = Bayi::all();
        return view('admin.bayi.index', $data);
    }

    function create()
    {
        return view('admin.bayi.create');
    }

    function store()
    {
        $bayi = new Bayi;
        $bayi->nama_lengkap = request('nama_lengkap');
        $bayi->jk_bayi = request('jk_bayi');
        $bayi->tmp_lahir_bayi = request('tmp_lahir_bayi');
        $bayi->tgl_lahir_bayi = request('tgl_lahir_bayi');
        $bayi->ortu_id = request('ortu_id');
        $bayi->save();
        return redirect('admin/bayi');
    }

    function show(Bayi $bayi)
    {
        $data['detail'] = $bayi;
        return view('admin.bayi.show', compact('bayi'));
    }

    function edit(Bayi $bayi)
    {
        $data['detail'] = $bayi;
        return view('admin.bayi.edit', $data);
    }

    function update(Bayi $bayi)
    {


        $bayi->ortu_id = request('ortu_id');
        $bayi->nama_lengkap = request('nama_lengkap');
        $bayi->jk_bayi = request('jk_bayi');
        $bayi->tmp_lahir_bayi = request('tmp_lahir_bayi');
        $bayi->tgl_lahir_bayi = request('tgl_lahir_bayi');
        $update = $bayi->update();
        if ($update) {
            return redirect('admin/bayi');
        } else {
            return back()->with('error', 'Woy gagal cor !');
        }
    }
    function delete(Bayi $bayi)
    {

        $bayi->delete();
        return back();
        return redirect()->route('bayi.index')->with('success', 'Data berhasil dihapus.');
    }

    function bayiCreate(Request $request, $identitas)
    {
        $identitas = Identitas::findOrFail($identitas);
        return view('admin.bayi.identitas.create', compact('identitas'));
    }

    public function bayiStore(Request $request)
    {
        $request->validate([
            'identitas_id' => 'required|exists:tb_identitas,id',
            'anak_nama' => 'required|string|max:255',
            'ibu_nama' => 'required|string|max:255',
            'anak_nik' => 'nullable|string|size:16',
            'anak_jkn' => 'nullable|string|max:255',
            'anak_faskes_tk1' => 'nullable|string|max:255',
            'anak_faskes_rujukan' => 'nullable|string|max:255',
            'anak_tempat_lahir' => 'nullable|string|max:255',
            'anak_tanggal_lahir' => 'nullable|date',
            'anak_alamat' => 'nullable|string',
            'anak_ke' => 'nullable|integer|min:1',
            'anak_akta_kelahiran' => 'nullable|string|max:255',
            'anak_gol_darah' => 'nullable|string|max:255',
            'puskesmas' => 'nullable|string|max:255',
            'kohort_ibu' => 'nullable|string|max:255',
            'kohort_bayi' => 'nullable|string|max:255',
            'kohort_balita' => 'nullable|string|max:255',
            'medik_rs' => 'nullable|string|max:255',
        ]);

        // Ambil data identitas berdasarkan ID
        $identitas = Identitas::findOrFail($request->identitas_id);

        // Update data anak di entri identitas
        $identitas->update($request->only([
            'anak_nama',
            'anak_nik',
            'anak_jkn',
            'anak_faskes_tk1',
            'anak_faskes_rujukan',
            'anak_tempat_lahir',
            'anak_tanggal_lahir',
            'anak_alamat',
            'anak_ke',
            'anak_akta_kelahiran',
            'anak_gol_darah',
            'puskesmas',
            'kohort_ibu',
            'kohort_bayi',
            'kohort_balita',
            'medik_rs',
        ]));

        return redirect('admin/bayi/identitas')->with('success', 'Data anak berhasil disimpan.');
    }


    public function bayiIndex(Request $request)
    {
        $query = Identitas::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('anak_nama', 'like', '%' . $search . '%')
                    ->orWhere('ibu_nik', 'like', '%' . $search . '%')
                    ->orWhere('ibu_nama', 'like', '%' . $search . '%');
            });
        }

        $query->whereNotNull('anak_nama');


        $data['identitas'] = $query->paginate(10);

        return view('admin.bayi.identitas.index', $data);
    }

    function bayiShow(Identitas $identitas)
    {
        $data['detail'] = $identitas;
        return view('admin.bayi.identitas.show', compact('identitas'));
    }
    function bayiEdit(Identitas $identitas)
    {
        $data['detail'] = $identitas;
        return view('admin.bayi.identitas.edit', $data);
    }

    function bayiUpdate(Request $request, $id)
    {
        $request->validate([
            'anak_nama' => 'required|string|max:255',
            'ibu_nama' => 'required|string|max:255',
            'anak_nik' => 'nullable|string|size:16',
            'anak_jkn' => 'nullable|string|max:255',
            'anak_faskes_tk1' => 'nullable|string|max:255',
            'anak_faskes_rujukan' => 'nullable|string|max:255',
            'anak_tempat_lahir' => 'nullable|string|max:255',
            'anak_tanggal_lahir' => 'nullable|date',
            'anak_alamat' => 'nullable|string',
            'anak_ke' => 'nullable|integer|min:1',
            'anak_akta_kelahiran' => 'nullable|string|max:255',
            'anak_gol_darah' => 'nullable|string|max:255',
            'puskesmas' => 'nullable|string|max:255',
            'kohort_ibu' => 'nullable|string|max:255',
            'kohort_bayi' => 'nullable|string|max:255',
            'kohort_balita' => 'nullable|string|max:255',
            'medik_rs' => 'nullable|string|max:255',
        ]);

        // Ambil data identitas berdasarkan ID
        $identitas = Identitas::findOrFail($id);

        // Update data anak
        $identitas->update($request->only([
            'anak_nama',
            'anak_nik',
            'anak_jkn',
            'anak_faskes_tk1',
            'anak_faskes_rujukan',
            'anak_tempat_lahir',
            'anak_tanggal_lahir',
            'anak_alamat',
            'anak_ke',
            'anak_akta_kelahiran',
            'anak_gol_darah',
            'puskesmas',
            'kohort_ibu',
            'kohort_bayi',
            'kohort_balita',
            'medik_rs',
        ]));

        return redirect('admin/bayi/identitas')->with('success', 'Data anak berhasil diperbarui.');
    }

    function bayiDelete(Identitas $identitas)
    {
        $identitas->delete();
        return redirect('admin/bayi/identitas')->with('success', 'Data berhasil dihapus.');
    }

    function periksaCreate(Request $request, $identitas)
    {
        $identitas = Identitas::findOrFail($identitas);
        return view('admin.bayi.periksa.create', compact('identitas'));
    }

    function periksaStore(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'identitas_id'       => 'required|exists:tb_identitas,id',
            'tanggal_pemeriksaan' => 'required|date',
            'umur_bulan'           => 'nullable|integer|min:0',
            'berat_badan'         => 'nullable|string',
            'tinggi_badan'        => 'nullable|string',
            'lingkar_kepala'      => 'nullable|string',
            'lingkar_lengan'      => 'nullable|string',
            'imunisasi'           => 'nullable|in:BCG,Hepatitis B,Polio,DPT-HB-Hib 1,DPT-HB-Hib 2,DPT-HB-Hib 3,Campak,Campak-Rubella,Booster DPT,Booster Polio,Tidak Ada',
            'vitamin_a'           => 'nullable|in:Biru,Merah',
        ]);

        // Simpan data pemeriksaan
        PeriksaBayi::create($validated);

        // Redirect dengan pesan sukses
        return redirect('admin/bayi/periksa')->with('success', 'Data pemeriksaan balita berhasil disimpan.');
    }

    function periksaIndex(Request $request)
    {
        $query = PeriksaBayi::with('identitas'); // memuat relasi identitas

        if ($request->has('search')) {
            $search = $request->search;
            $query->whereHas('identitas', function ($q) use ($search) {
                $q->Where('ibu_nama', 'like', '%' . $search . '%')
                    ->orWhere('anak_nama', 'like', '%' . $search . '%');
            });
        }

        $data['periksaBayi'] = $query->paginate(10);

        return view('admin.bayi.periksa.index', $data);
    }

    // function periksaShow(PeriksaBayi $periksaBayi)
    // {
    //     // Pastikan relasi identitas ikut dimuat
    //     $periksaBayi->load('identitas', 'identitas.anak');

    //     return view('admin.bayi.periksa.show', [
    //         'periksaBayi' => $periksaBayi
    //     ]);
    // }

    function periksaShow(PeriksaBayi $periksaBayi)
    {
        // Pastikan relasi identitas ikut dimuat
        $periksaBayi->load('identitas');
        // Verifikasi apakah pengguna yang sedang login adalah pemilik identitas
        $user = Auth::guard('ibuhamil')->user();
        if (!$user || $periksaBayi->identitas->ibu_hamil_id !== $user->id) {
            abort(403, 'Anda tidak memiliki izin untuk melihat data ini.');
        }
        return view('admin.bayi.periksa.show', [
            'periksaBayi' => $periksaBayi
        ]);
    }

    function periksaEdit(PeriksaBayi $periksaBayi)
    {
        $periksaBayi->load('identitas', 'identitas.anak');

        return view('admin.bayi.periksa.edit', [
            'periksaBayi' => $periksaBayi
        ]);
    }

    function periksaUpdate(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'tanggal_pemeriksaan' => 'required|date',
            'umur_bulan' => 'nullable|integer|min:0',
            'berat_badan' => 'nullable|string',
            'tinggi_badan' => 'nullable|string',
            'lingkar_kepala' => 'nullable|string',
            'lingkar_lengan' => 'nullable|string',
            'imunisasi' => 'nullable|string',
            'vitamin_a' => 'nullable|string',
        ]);

        // Temukan data berdasarkan ID
        $periksa = PeriksaBayi::findOrFail($id);

        // Update data
        $periksa->tanggal_pemeriksaan = $request->tanggal_pemeriksaan;
        $periksa->umur_bulan = $request->umur_bulan;
        $periksa->berat_badan = $request->berat_badan;
        $periksa->tinggi_badan = $request->tinggi_badan;
        $periksa->lingkar_kepala = $request->lingkar_kepala;
        $periksa->lingkar_lengan = $request->lingkar_lengan;
        $periksa->imunisasi = $request->imunisasi;
        $periksa->vitamin_a = $request->vitamin_a;

        // Simpan perubahan
        $periksa->save();

        // Redirect dengan pesan sukses
        return redirect('admin/bayi/periksa')->with('success', 'Data pemeriksaan berhasil diperbarui.');
    }

    function periksaDelete(PeriksaBayi $periksaBayi)
    {
        $periksaBayi->delete();
        return redirect('admin/bayi/periksa')->with('success', 'Data pemeriksaan berhasil dihapus');
    }
}
