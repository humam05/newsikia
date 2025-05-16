<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Dinkes;
use App\Models\Nakes;
use App\Models\Puskesmas;
use App\Models\IbuHamil;

class AdminAkunController extends Controller
{
    function dinasIndex()
    {
       $data['dinkes'] = Dinkes::all();
        return view('admin.akun.dinas.index', $data);
    }

    function dinasCreate()
    {
        return view('admin.akun.dinas.create');
    }

    function dinasStore()
    {
        $dinkes =  new Dinkes;
        $dinkes->name = request('name');
        $dinkes->email = request('email');
        $dinkes->password = Hash::make(request('password'));
        $dinkes->save();
        return redirect('admin/akun/dinas');
    }

    function showDinas(Dinkes $dinkes)
    {
        $data['detail'] = $dinkes;
        return view('admin.akun.dinas.show', compact('dinkes'));
    }

    function editDinas(Dinkes $dinkes)
    {
        $data['detail'] = $dinkes;
        return view('admin.akun.dinas.edit', $data);
    }

    function updateDinas(Dinkes $dinkes)
    {
        $dinkes->name = request('name');
        $dinkes->email = request('email');
               $dinkes->password = Hash::make(request('password'));
               $update = $dinkes->update();
                if ($update) {
            return redirect('admin/akun/dinas');
        } else {
            return back()->with('error', 'gagal !');
        }
    }

    function nakesIndex()
    {
        return view('admin.akun.nakes.index');
    }
    function puskesmasIndex()
    {
        return view('admin.akun.puskesmas.index');
    }
    function bumilIndex()
    {
        return view('admin.akun.ibu_hamil.index');
    }



    function nakesCreate()
    {
        return view('admin.akun.nakes.create');
    }

    function puskesmasCreate()
    {
        return view('admin.akun.puskesmas.create');
    }

    function bumilCreate()
    {
        return view('admin.akun.ibu_hamil.create');
    }
}
