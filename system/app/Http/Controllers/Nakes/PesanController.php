<?php

namespace App\Http\Controllers\Nakes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identitas;

class PesanController extends Controller
{
    public function index(Request $request)
    {
        $query = Identitas::query();

        if ($request->has('search')) {
            $search = $request->search;
            $query->where('ibu_nama', 'like', '%' . $search . '%');
        }

        $data['pesan'] = $query->paginate(10);

        return view('nakes.pesan.index', $data);
    }

    public function kirimPesan($id)
    {
        $data['ibu'] = \App\Models\Identitas::findOrFail($id); // ambil data ibu berdasarkan ID
        return view('nakes.pesan.kirim_pesan', $data);
    }
}
