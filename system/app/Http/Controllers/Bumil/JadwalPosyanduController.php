<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalPosyanduController extends Controller
{
    function index()
    {
        return view('ibu_hamil.jadwal_posyandu.index');
    }
}
