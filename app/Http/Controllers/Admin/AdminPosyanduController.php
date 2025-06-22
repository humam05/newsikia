<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posyandu;
use App\Models\Fasyankes;

class AdminPosyanduController extends Controller
{
    function index(Request $request)
    {
        $search = $request->input('search');

        $posyandu = Posyandu::with('fasyankes')
            ->when($search, function ($query, $search) {
                $query->where('nama_posyandu', 'like', "%$search%")
                    ->orWhereHas('fasyankes', function ($q) use ($search) {
                        $q->where('nama', 'like', "%$search%");
                    });
            })
            ->get();

        return view('admin.posyandu.index', compact('posyandu'));
    }



    function create()
    {
        $fasyankesList = Fasyankes::all();
        return view('admin.posyandu.create', compact('fasyankesList'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_posyandu' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'fasyankes_id' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Menyimpan data Posyandu ke dalam database
        $posyandu = new Posyandu;
        $posyandu->nama_posyandu = $request->nama_posyandu;
        $posyandu->tanggal = $request->tanggal;
        $posyandu->waktu = $request->waktu;
        $posyandu->lokasi = $request->lokasi;
        $posyandu->fasyankes_id = $request->fasyankes_id;

        // Proses upload foto
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

        // Simpan data Posyandu
        $posyandu->save();

        return redirect('admin/posyandu');
    }

    function edit($id)
    {
        $detail = Posyandu::findOrFail($id);
        $fasyankes = Fasyankes::all(); // ambil semua fasyankes

        return view('admin.posyandu.edit', compact('detail', 'fasyankes'));
    }

    function update(Request $request, Posyandu $posyandu)
    {
        // Validasi input
        $request->validate([
            'nama_posyandu' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'fasyankes_id' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Update data Posyandu
        $posyandu->nama_posyandu = $request->nama_posyandu;
        $posyandu->tanggal = $request->tanggal;
        $posyandu->waktu = $request->waktu;
        $posyandu->lokasi = $request->lokasi;
        $posyandu->fasyankes_id = $request->fasyankes_id;

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
