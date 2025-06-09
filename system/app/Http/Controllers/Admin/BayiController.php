<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bayi;
use App\Models\Identitas;

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
                    ->orWhere('nik_ibu', 'like', '%' . $search . '%')
                    ->orWhere('nama_ibu', 'like', '%' . $search . '%');
            });
        }

        $query->whereNotNull('anak_nama');


        $data['identitas'] = $query->paginate(10);

        return view('admin.bayi.identitas.index', $data);
    }
}
