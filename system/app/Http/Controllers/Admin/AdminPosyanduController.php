<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posyandu;

class AdminPosyanduController extends Controller
{
    function index(Request $request)
    {
        $query = Posyandu::query();

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama_posyandu', 'like', '%' . $search . '%')
                    ->orWhere('nama_fasyankes', 'like', '%' . $search . '%');
            });
        }

        $data['posyandu'] = $query->get();
        return view('admin.posyandu.index', $data);
    }


    function create()
    {
        return view('admin.posyandu.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_posyandu' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'nama_fasyankes' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Menyimpan data Posyandu ke dalam database
        $posyandu = new Posyandu;
        $posyandu->nama_posyandu = $request->nama_posyandu;
        $posyandu->tanggal = $request->tanggal;
        $posyandu->waktu = $request->waktu;
        $posyandu->lokasi = $request->lokasi;
        $posyandu->nama_fasyankes = $request->nama_fasyankes;

        // Proses upload foto
        if ($request->hasFile('foto')) {
            // Cek apakah file berhasil diupload
            if ($request->foto->isValid()) {
                $fotoPath = $request->foto->store('posyantdu', 'public'); // Menyimpan foto ke folder 'posyandu'
                $posyandu->foto = basename($fotoPath); // Simpan nama file foto ke database
            } else {
                // Jika upload gagal, berikan pesan error
                return back()->with('error', 'Upload foto gagal');
            }
        }

        // Simpan data Posyandu
        $posyandu->save();

        return redirect('admin/posyandu');
    }

    function edit(Posyandu $posyandu)
    {
        $data['detail'] = $posyandu;
        return view('admin.posyandu.edit', $data);
    }

    function update(Request $request, Posyandu $posyandu)
    {
        // Validasi input
        $request->validate([
            'nama_posyandu' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'nama_fasyankes' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Update data Posyandu
        $posyandu->nama_posyandu = $request->nama_posyandu;
        $posyandu->tanggal = $request->tanggal;
        $posyandu->waktu = $request->waktu;
        $posyandu->lokasi = $request->lokasi;
        $posyandu->nama_fasyankes = $request->nama_fasyankes;

        // Proses upload foto jika ada
        if ($request->hasFile('foto')) {
            // Cek apakah file berhasil diupload
            if ($request->foto->isValid()) {
                $fotoPath = $request->foto->store('posyandu', 'public'); // Menyimpan foto ke folder 'posyandu'
                $posyandu->foto = basename($fotoPath); // Simpan nama file foto ke database
            } else {
                // Jika upload gagal, berikan pesan error
                return back()->with('error', 'Upload foto gagal');
            }
        }

        // Simpan perubahan
        $posyandu->save();

        return redirect('admin/posyandu')->with('success', 'Data Posyandu berhasil diperbarui');
    }

    function delete(Posyandu $posyandu)
    {
        $posyandu->delete();
        return back()->with('success', 'Data Posyandu Berhasil dihapus');
    }
}
