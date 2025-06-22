<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bidan;
use App\Models\Fasyankes;
use App\Models\Bayi;
use App\Models\Posyandu;
use App\Models\Identitas;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBidan = Bidan::count();
        $totalFasyankes = Fasyankes::count();
        $totalBayi = Bayi::count();
        $totalIdentitas = Identitas::count();
        $totalPosyandu = Posyandu::count();

        return view('admin.dashboard', compact('totalBidan', 'totalFasyankes', 'totalBayi', 'totalIdentitas', 'totalPosyandu'));
    }
}
