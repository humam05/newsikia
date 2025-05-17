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


    function dinasEdit(Dinkes $dinkes)
    {
        $data['detail'] = $dinkes;
        return view('admin.akun.dinas.edit', $data);
    }

    function dinasUpdate(Dinkes $dinkes)
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

    function dinasDelete(Dinkes $dinkes)
    {
        $dinkes->delete();
        return redirect('admin/akun/dinas');
    }

    //FUNCTION UNTUK AKUN NAKES
    function nakesIndex()
    {
        $data['nakes'] = Nakes::all();
        return view('admin.akun.nakes.index', $data);
    }

    function nakesCreate()
    {
        return view('admin.akun.nakes.create');
    }

    function nakesStore()
    {
        $nakes =  new Nakes;
        $nakes->name = request('name');
        $nakes->email = request('email');
        $nakes->password = Hash::make(request('password'));
        $nakes->save();
        return redirect('admin/akun/nakes');
    }

    function nakesEdit(Nakes $nakes)
    {
        $data['detail'] = $nakes;
        return view('admin.akun.nakes.edit', $data);
    }

     function nakesUpdate(Nakes $nakes)
    {
        $nakes->name = request('name');
        $nakes->email = request('email');
        $nakes->password = Hash::make(request('password'));
        $update = $nakes->update();
        if ($update) {
            return redirect('admin/akun/nakes');
        } else {
            return back()->with('error', 'gagal !');
        }
    }

    function nakesDelete(Nakes $nakes)
    {
        $nakes->delete();
        return redirect('admin/akun/nakes');
    }

    //FUNCTION UNTUK AKUN PUSKESMAS
    function puskesmasIndex()
    {
        $data['puskesmas'] = Puskesmas::all();
        return view('admin.akun.puskesmas.index', $data);
    }

    function puskesmasCreate()
    {
        return view('admin.akun.puskesmas.create');

    }

     function puskesmasStore()
    {
        $puskesmas =  new Puskesmas;
        $puskesmas->name = request('name');
        $puskesmas->email = request('email');
        $puskesmas->password = Hash::make(request('password'));
        $puskesmas->save();
        return redirect('admin/akun/puskesmas');
    }

    function puskesmasEdit(Puskesmas $puskesmas)
    {
        $data['detail'] = $puskesmas;
        return view('admin.akun.puskesmas.edit', $data);
    }

    function puskesmasUpdate(Puskesmas $puskesmas)
    {
        $puskesmas->name = request('name');
        $puskesmas->email = request('email');
        $puskesmas->password = Hash::make(request('password'));
        $update = $puskesmas->update();
        if ($update) {
            return redirect('admin/akun/puskesmas');
        } else {
            return back()->with('error', 'gagal !');
        }
    }

      function puskesmasDelete(Puskesmas $puskesmas)
    {
        $puskesmas->delete();
        return redirect('admin/akun/puskesmas');
    }

    //FUNCTION UNTUK AKUN IBU HAMIL
    function IbuHamilIndex()
    {
        $data['IbuHamil'] = IbuHamil::all();
        return view('admin.akun.ibu_hamil.index', $data);
    }

    function IbuHamilCreate()
    {
        return view('admin.akun.ibu_hamil.create');

    }

     function IbuHamilStore()
    {
        $IbuHamil =  new IbuHamil;
        $IbuHamil->name = request('name');
        $IbuHamil->email = request('email');
        $IbuHamil->password = Hash::make(request('password'));
        $IbuHamil->save();
        return redirect('admin/akun/ibu_hamil');
    }

    function IbuHamilEdit(IbuHamil $IbuHamil)
    {
        $data['detail'] = $IbuHamil;
        return view('admin.akun.ibu_hamil.edit', $data);
    }

    function IbuHamilUpdate(IbuHamil $IbuHamil)
    {
        $IbuHamil->name = request('name');
        $IbuHamil->email = request('email');
        $IbuHamil->password = Hash::make(request('password'));
        $update = $IbuHamil->update();
        if ($update) {
            return redirect('admin/akun/ibu_hamil');
        } else {
            return back()->with('error', 'gagal !');
        }
    }

      function IbuHamilDelete(IbuHamil $IbuHamil)
    {
        $IbuHamil->delete();
        return redirect('admin/akun/ibu_hamil');
    }

    //FUNCTION UNTUK ADMIN
    function adminIndex()
    {
        $data['admin'] = Admin::all();
        return view('admin.akun.admin.index', $data);
    }

    function adminCreate()
    {
        return view('admin.akun.admin.create');

    }

     function adminStore()
    {
        $admin =  new Admin;
        $admin->name = request('name');
        $admin->email = request('email');
        $admin->password = Hash::make(request('password'));
        $admin->save();
        return redirect('admin/akun/admin');
    }

    function adminEdit(Admin $admin)
    {
        $data['detail'] = $admin;
        return view('admin/akun/admin/edit', $data);
    }

    function adminUpdate(Admin $admin)
    {
        $admin->name = request('name');
        $admin->email = request('email');
        $admin->password = Hash::make(request('password'));
        $update = $admin->update();
        if ($update) {
            return redirect('admin/akun/admin');
        } else {
            return back()->with('error', 'gagal !');
        }
    }

      function adminDelete(Admin $admin)
    {
        $admin->delete();
        return redirect('admin/akun/admin');
    }
}
