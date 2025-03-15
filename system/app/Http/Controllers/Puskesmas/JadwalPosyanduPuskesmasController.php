<?php

namespace App\Http\Controllers\Puskesmas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalPosyanduPuskesmasController extends Controller
{
    function index()
    {
        return view('puskesmas.jadwal_posyandu_puskesmas.index');
    }
}
