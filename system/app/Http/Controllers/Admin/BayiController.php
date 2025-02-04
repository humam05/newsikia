<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bayi;

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
}
