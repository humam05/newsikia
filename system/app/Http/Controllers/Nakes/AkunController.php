<?php

namespace App\Http\Controllers\Nakes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    function index()
    {
        return view('nakes.akun.index');
    }
}
