<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posyandu;

class AdminPosyanduController extends Controller
{
    function index()
    {
        $data['posyandu'] = Posyandu::all();
        return view('admin.posyandu.index', $data);
    }

    function create()
    {
        return view('admin.posyandu.create');
    }

    function store()
    {
        $posyandu = new Posyandu;
        $posyandu->nama_posyandu = request ('nama_posyandu');
        $posyandu->tanggal = request ('tanggal');
        $posyandu->waktu = request ('waktu');
        $posyandu->lokasi = request ('lokasi');
        $posyandu->nama_fasyankes = request ('nama_fasyankes');
        $posyandu->save();
        return redirect('admin/posyandu');
    }


}
