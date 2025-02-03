<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        return view('admin.dashboard');
    }
    function index2()
    {
        return view('bidan.dashboard');
    }


}
