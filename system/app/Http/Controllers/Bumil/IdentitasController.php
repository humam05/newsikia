<?php

namespace App\Http\Controllers\Bumil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identitas;

class IdentitasController extends Controller
{
    function index()
    {
        return view('ibu_hamil.identitas.index');
    }

    function create()
    {
        return view('ibu_hamil.identitas.create');
    }

    public function store()
    {
        return redirect('ibu_hamil/identitas');
    }
}
