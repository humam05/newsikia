<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bidan;
use App\Models\Fasyankes;

class BidanController extends Controller
{
    function index()
    {
        $data['bidan'] = Bidan::paginate(10);
        return view('admin.bidan.index', $data);
    }
    function create()
    {
        $fasyankesList = Fasyankes::all(); // Atau pakai where/limit kalau banyak
        return view('admin.bidan.create', compact('fasyankesList'));
    }
    function store()
    {
        $bidan = new Bidan;
        $bidan->fasyankes_id = request('fasyankes_id');
        $bidan->nama_bidan = request('nama_bidan');
        $bidan->nik = request('nik');
        $bidan->no_telpon = request('no_telpon');
        $bidan->email = request('email');
        $bidan->tempat_lahir = request('tempat_lahir');
        $bidan->tanggal_lahir = request('tanggal_lahir');
        $bidan->alamat_lengkap = request('alamat_lengkap');
        $bidan->provinsi = request('provinsi');
        $bidan->kabupaten = request('kabupaten');
        $bidan->kecamatan = request('kecamatan');
        $bidan->desa = request('desa');
        $bidan->save();
        return redirect('admin/bidan');
    }

    function show(Bidan $bidan)
    {
        $bidan->load('fasyankes'); // pastikan relasi diload
        return view('admin.bidan.show', compact('bidan'));
    }



    function edit(Bidan $bidan)
    {
        $data['detail'] = $bidan;
        $data['fasyankes'] = Fasyankes::all();
        return view('admin.bidan.edit', $data);
    }

    function update(Bidan $bidan)
    {
        $bidan->fasyankes_id = request('fasyankes_id');
        $bidan->nama_bidan = request('nama_bidan');
        $bidan->nik = request('nik');
        $bidan->no_telpon = request('no_telpon');
        $bidan->email = request('email');
        $bidan->tempat_lahir = request('tempat_lahir');
        $bidan->tanggal_lahir = request('tanggal_lahir');
        $bidan->alamat_lengkap = request('alamat_lengkap');
        $bidan->provinsi = request('provinsi');
        $bidan->kabupaten = request('kabupaten');
        $bidan->kecamatan = request('kecamatan');
        $bidan->desa = request('desa');

        $update = $bidan->update();

        if ($update) {
            return redirect('admin/bidan');
        } else {
            return back()->with('error', 'Gagal memperbarui data!');
        }
    }


    function delete(Bidan $bidan)
    {

        $bidan->delete();
        return back();
        return redirect()->route('bidan.index')->with('success', 'Data berhasil dihapus.');
    }
}
