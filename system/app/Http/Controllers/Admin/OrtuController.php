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
}
