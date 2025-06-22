<?php

namespace App\Http\Controllers\Nakes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Identitas;
use Illuminate\Support\Facades\Http;

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



    public function kirimPesan(Request $request, $id)
    {
        $ibu = Identitas::findOrFail($id);

        if ($request->isMethod('post')) {
            $nomor = preg_replace('/[^0-9]/', '', $ibu->ibu_telepon);

            // Ubah ke format internasional jika diawali 0
            if (substr($nomor, 0, 1) == '0') {
                $nomor = '62' . substr($nomor, 1);
            }

            $pesan = $request->pesan;

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://app.wapanels.com/api/create-message',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => array(
                    'appkey'   => env('WAPANEL_APPKEY'),
                    'authkey'  => env('WAPANEL_AUTHKEY'),
                    'to'       => $nomor,
                    'message'  => $pesan,
                    'sandbox'  => 'false'
                ),
            ));

            $response = curl_exec($curl);
            $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE); // status kode
            curl_close($curl);

            if ($httpcode == 200) {
                return redirect()->route('nakes.pesan.index')->with('success', 'Pesan berhasil dikirim.');
            } else {
                return back()->with('error', 'Gagal mengirim pesan. Respons: ' . $response);
            }
        }

        return view('nakes.pesan.kirim_pesan', compact('ibu'));
    }


    // public function kirimPesan(Request $request)
    // {
    //     $nomor = preg_replace('/[^0-9]/', '', $request->nomor); // Bersihkan nomor

    //     if (substr($nomor, 0, 1) == '0') {
    //         $nomor = '62' . substr($nomor, 1); // Ubah 08... menjadi 628...
    //     }

    //     $response = Http::asForm()->post('https://app.wapanels.com/api/create-message', [
    //         'appkey' => env('WAPANEL_APPKEY'),
    //         'authkey' => env('WAPANEL_AUTHKEY'),
    //         'to' => $nomor,
    //         'message' => $request->pesan,
    //         'sandbox' => 'false',
    //     ]);

    //     if ($response->successful()) {
    //         return back()->with('success', 'Pesan berhasil dikirim!');
    //     } else {
    //         // Debug responsnya
    //         return back()->with('error', 'Gagal mengirim pesan: ' . $response->body());
    //     }
    // }
}
