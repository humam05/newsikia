<?php

namespace App\Http\Controllers\Nakes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BayinController extends Controller
{
    function index()
    {
        return view('nakes.bayi.index');
    }

    function kms()
    {
        return view('nakes.bayi.kms');
    }
}
