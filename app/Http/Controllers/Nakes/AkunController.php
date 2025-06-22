<?php

namespace App\Http\Controllers\Nakes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\IbuHamil;

class AkunController extends Controller
{
    function index()
    {
        $data['IbuHamil'] = IbuHamil::all();
        return view('nakes.akun.index', $data);
    }

    function create()
    {
         return view('nakes.akun.create');
    }

     function store()
    {
        $IbuHamil =  new IbuHamil;
        $IbuHamil->name = request('name');
        $IbuHamil->email = request('email');
        $IbuHamil->password = Hash::make(request('password'));
        $IbuHamil->save();
        return redirect('nakes/akun');
    }

     function edit(IbuHamil $IbuHamil)
    {
        $data['detail'] = $IbuHamil;
        return view('nakes.akun.edit', $data);
    }

    function update(IbuHamil $IbuHamil)
    {
        $IbuHamil->name = request('name');
        $IbuHamil->email = request('email');
        $IbuHamil->password = Hash::make(request('password'));
        $update = $IbuHamil->update();
        if ($update) {
            return redirect('nakes/akun');
        } else {
            return back()->with('error', 'gagal !');
        }
    }

      function delete(IbuHamil $IbuHamil)
    {
        $IbuHamil->delete();
        return redirect('nakes/akun');
    }

}
