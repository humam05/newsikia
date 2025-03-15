<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataDiriController extends Controller
{
    function index()
    {
        return view('ibu_hamil.data_diri.index');
    }
}
