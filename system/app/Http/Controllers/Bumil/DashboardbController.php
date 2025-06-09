<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identitas;
use Illuminate\Support\Facades\Auth;

class DashboardbController extends Controller
{
    function index()
{
    // Misalnya hanya menampilkan identitas milik user yang login
    $identitas = Identitas::where('ibu_hamil_id', Auth::id())->get();

    return view('ibu_hamil.dashboard', compact('identitas'));
}

    function edit(Identitas $identitas)
    {
        $data['detail'] = $identitas;
        return view('ibu_hamil.identitas.edit', $data);
    }
}
