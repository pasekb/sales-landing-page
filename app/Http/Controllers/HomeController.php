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
        ->join('gambar','stoks.gambar_id','=','gambar.id_gambar')
        ->where('stoks.stok','>',0)
        ->groupBy('nama_motor')
        ->orderBy('nama_motor','asc')
        ->get();

        $daftar = Unit::orderBy('nama_unit','asc')->get();

        return view('index', [
            'unit' => $unit,
            'daftar' => $daftar
        ]);
    }

    public function detail($id){
        $stok = DB::table('stoks')
        ->join('units','stoks.unit_id','=','units.id_unit')
        ->join('gambar','stoks.gambar_id','=','gambar.id_gambar')
        ->where('stoks.stok','>',0)
        ->groupBy('nama_motor','warna')
        ->orderBy('nama_motor','asc')
        ->get();

        return view('detail',[
            'stok' => $stok
        ]);
    }
}
