<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPosyanduController extends Controller
{
    function index()
    {
        return view('admin.posyandu.index');
    }
}
