<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardbController extends Controller
{
    function index()
    {
        return view('bumil.dashboard');
    }
}
