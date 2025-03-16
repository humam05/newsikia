<?php

namespace App\Http\Controllers\Dinkes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboarddController extends Controller
{
    function index()
    {
        return view('dinkes.dashboard');
    }
}
