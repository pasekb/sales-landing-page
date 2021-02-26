<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stok;
use App\Models\Unit;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $unit = DB::table('stoks')
        ->join('units','stoks.unit_id','=','units.id_unit')
        ->where('stoks.stok','>',0)
        ->groupBy('nama_motor')
        ->orderBy('nama_motor','asc')
        ->get();

        $stok = Stok::where('stok','>',0)
        ->groupBy('nama_motor','warna')
        ->orderBy('nama_motor','asc')
        ->get();

        $daftar = Unit::orderBy('nama_unit','asc')->get();

        return view('index', [
            'stok' => $stok,
            'unit' => $unit,
            'daftar' => $daftar
        ]);
    }
}
