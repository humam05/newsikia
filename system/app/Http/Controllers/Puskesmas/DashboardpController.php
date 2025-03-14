<?php

namespace App\Http\Controllers\Puskesmas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardpController extends Controller
{
    function index()
    {
        return view('puskesmas.dashboard');
    }
}
