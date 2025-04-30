<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bidan;

class BidanController extends Controller
{
    function index()
    {
        $data['bidan'] = Bidan::all();
        return view('admin.bidan.index', $data);
    }

    function create()
    {
        return view('admin.bidan.create');
    }


    function store()
    {
        $bidan = new Bidan;
        $bidan->nama_bidan = request('nama_bidan');
        $bidan->nik = request('nik');
        $bidan->no_telpon = request('no_telpon');
        $bidan->email = request('email');
        $bidan->fasyankes_id = request('fasyankes_id');
        $bidan->save();
        return redirect('admin/bidan');
    }

    function show(Bidan $bidan)
    {
        $data['detail'] = $bidan;
        return view('admin.bidan.show', compact('bidan'));
    }

    function edit(Bidan $bidan)
    {
        $data['detail'] = $bidan;
        return view('admin.bidan.edit', $data);
    }

    function update(Bidan $bidan)
    {


        $bidan->nama_bidan = request('nama_bidan');
        $bidan->nik = request('nik');
        $bidan->no_telpon = request('no_telpon');
        $bidan->email = request('email');
        $bidan->fasyankes_id = request('fasyankes_id');
        $update = $bidan->update();
        if ($update) {
            return redirect('admin/bidan');
        } else {
            return back()->with('error', 'gagal !');
        }
    }

    function delete(Bidan $bidan)
    {

        $bidan->delete();
        return back();
        return redirect()->route('bidan.index')->with('success', 'Data berhasil dihapus.');
    }
}
