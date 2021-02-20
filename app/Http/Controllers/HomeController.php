<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stok;

class HomeController extends Controller
{
    public function index()
    {
        $stok = Stok::where('stok','>',0)
        ->groupBy('nama_motor','warna')
        ->orderBy('nama_motor','asc')
        ->get();
        return view('home', [
            'stok' => $stok
        ]);
    }
}
