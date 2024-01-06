<?php

namespace App\Http\Controllers;

use App\Models\Resi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalResi = Resi::count();

        return view('dashboard', compact('totalResi'));
    }
}
