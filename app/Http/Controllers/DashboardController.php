<?php

namespace App\Http\Controllers;

use App\Models\Resi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil data resi dari model atau sumber data lainnya
        $resis = Resi::all();

        // Menghitung totalCash, totalCOD, dan totalProfit
        $totalCash = 0;
        $totalCOD = 0;

        foreach ($resis as $resi) {
            if ($resi->cod == true) {
                $totalCOD += $resi->biaya;
            } else {
                $totalCash += $resi->biaya;
            }
        }

        $totalProfit = ($totalCash + $totalCOD) * 0.2;

        // Menghitung totalResi
        $totalResi = count($resis);

        // Mengirim data ke view
        return view('dashboard', [
            'totalResi' => $totalResi,
            'totalCash' => $totalCash,
            'totalCOD' => $totalCOD,
            'totalProfit' => $totalProfit,
            'resis' => $resis,
        ]);
    }
}
