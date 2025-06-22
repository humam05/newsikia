<?php

namespace App\Http\Controllers\Puskesmas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posyandu;

class DashboardpController extends Controller
{
    function index()
    {
        $totalPosyandu = Posyandu::count();
        return view('puskesmas.dashboard', compact('totalPosyandu'));
    }
}
