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
        $bidan->nama = request('nama');
        $bidan->kecamatan = request('kecamatan');
        $bidan->kelurahan = request('kelurahan');
        $bidan->desa = request('desa');
        $bidan->rt_rw = request('rt_rw');
        $bidan->save();
        return redirect('admin/bidan');
    }


}
