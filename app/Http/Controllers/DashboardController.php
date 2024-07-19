<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Ruangan;

class DashboardController extends Controller
{
    public function index()
    {
        $countBarang = Barang::count();
        $countRuangan = Ruangan::count();

        return view('dashboard.index', compact('countBarang', 'countRuangan'));
    }
}
