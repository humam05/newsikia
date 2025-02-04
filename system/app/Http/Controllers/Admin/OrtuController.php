<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ortu;

class OrtuController extends Controller
{
    function index()
    {
        $data['ortu'] = Ortu::all();
        return view('admin.ortu.index', $data);
    }

    function create(){
        return view('admin.ortu.create');
    }

    function store()
    {
        $ortu = new Ortu;
        $ortu->nama = request('nama');
        $ortu->jk_ortu = request('jk_ortu');
        $ortu->tmp_lahir_ortu = request('tmp_lahir_ortu');
        $ortu->tgl_lahir_ortu = request('tgl_lahir_ortu');
        $ortu->tlp = request('tlp');
        $ortu->alamat = request('alamat');
        $ortu->save();
        return redirect('admin/ortu');
    }

    function show(Ortu $ortu)
    {
        $data['detail'] = $ortu;
        return view('admin.ortu.show', compact('ortu'));
    }

    function edit(Ortu $ortu)
    {
        $data['detail'] = $ortu;
        return view('admin.ortu.edit', $data);
    }

    function update(Ortu $ortu)
    {


        $ortu->nama = request('nama');
        $ortu->jk_ortu = request('jk_ortu');
        $ortu->tmp_lahir_ortu = request('tmp_lahir_ortu');
        $ortu->tgl_lahir_ortu = request('tgl_lahir_ortu');
        $ortu->tlp = request('tlp');
        $ortu->alamat = request('alamat');
        $update = $ortu->update();
        if ($update) {
            return redirect('admin/ortu');
        } else {
            return back()->with('error', 'Data Gagal Disimpan!');
        }
    }

    function delete(Ortu $ortu)
    {

        $ortu->delete();
        return back();
    }
}

