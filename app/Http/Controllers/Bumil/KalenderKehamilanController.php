<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KalenderKehamilanController extends Controller
{
    function index()
    {
        return view('ibu_hamil.kalender_kehamilan.index');
    }
}
