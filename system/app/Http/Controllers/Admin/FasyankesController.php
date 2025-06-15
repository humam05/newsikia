<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fasyankes;

class FasyankesController extends Controller
{
    public function index()
    {
        $data['fasyankes'] = Fasyankes::paginate(10); // Menampilkan 10 data per halaman
        return view('admin.fasyankes.index', $data);
    }


    function create()
    {
        return view('admin.fasyankes.create');
    }


    function store()
    {
        $fasyankes = new Fasyankes;
        $fasyankes->nama = request('nama');
        $fasyankes->kecamatan = request('kecamatan');
        $fasyankes->kelurahan = request('kelurahan');
        $fasyankes->desa = request('desa');
        $fasyankes->rt_rw = request('rt_rw');
        $fasyankes->save();
        return redirect('admin/fasyankes');
    }

    function show(Fasyankes $fasyankes)
    {
        $data['detail'] = $fasyankes;
        return view('admin.fasyankes.show', compact('fasyankes'));
    }


    function edit(Fasyankes $fasyankes)
    {
        $data['detail'] = $fasyankes;
        return view('admin.fasyankes.edit', $data);
    }

    function update(Fasyankes $fasyankes)
    {


        $fasyankes->nama = request('nama');
        $fasyankes->kecamatan = request('kecamatan');
        $fasyankes->kelurahan = request('kelurahan');
        $fasyankes->desa = request('desa');
        $fasyankes->rt_rw = request('rt_rw');
        $update = $fasyankes->update();
        if ($update) {
            return redirect('admin/fasyankes');
        } else {
            return back()->with('error', 'Woy gagal cor !');
        }
    }

    function delete(Fasyankes $fasyankes)
    {

        $fasyankes->delete();
        return back();
    }
}
