<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stok;

class HomeController extends Controller
{
    public function index()
    {
        $unit = Stok::where('stok','>',0)
        ->groupBy('nama_motor')
        ->orderBy('nama_motor','asc')
        ->get();

        $stok = Stok::where('stok','>',0)
        ->groupBy('nama_motor','warna')
        ->orderBy('nama_motor','asc')
        ->get();
        return view('index', [
            'stok' => $stok,
            'unit' => $unit
        ]);
    }
}
