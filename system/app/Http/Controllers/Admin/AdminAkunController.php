<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAkunController extends Controller
{
    function dinasIndex()
    {
        return view('admin.akun.dinas.index');
    }
    function nakesIndex()
    {
        return view('admin.akun.nakes.index');
    }
    function puskesmasIndex()
    {
        return view('admin.akun.puskesmas.index');
    }
    function bumilIndex()
    {
        return view('admin.akun.ibu_hamil.index');
    }

    function dinasCreate()
    {
        return view('admin.akun.dinas.create');
    }

    function nakesCreate()
    {
        return view('admin.akun.nakes.create');
    }

    function puskesmasCreate()
    {
        return view('admin.akun.puskesmas.create');
    }

    function bumilCreate()
    {
        return view('admin.akun.ibu_hamil.create');
    }
}
