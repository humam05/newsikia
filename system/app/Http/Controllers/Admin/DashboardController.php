<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bidan;
use App\Models\Fasyankes;
use App\Models\Bayi;
use App\Models\Ortu;
use App\Models\Posyandu;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBidan = Bidan::count();
        $totalFasyankes = Fasyankes::count();
        $totalBayi = Bayi::count();
        $totalOrtu = Ortu::count();
        $totalPosyandu = Posyandu::count();

        return view('admin.dashboard', compact('totalBidan', 'totalFasyankes', 'totalBayi', 'totalOrtu', 'totalPosyandu'));
    }
}
