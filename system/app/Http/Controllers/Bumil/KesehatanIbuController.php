<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KesehatanIbuController extends Controller
{
    function index()
    {
        return view('ibu_hamil.kesehatan_ibu.index');
    }
}
