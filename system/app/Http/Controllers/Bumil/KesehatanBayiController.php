<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KesehatanBayiController extends Controller
{
    function index()
    {
        return view('ibu_hamil.kesehatan_bayi.index');
    }
}
