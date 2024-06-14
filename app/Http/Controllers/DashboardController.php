<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\Kategori;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $barang = Barang::all()->count();
        $kategori = Kategori::all()->count();
        $barangMasuk = BarangMasuk::all()->count();
        $barangKeluar = BarangKeluar::all()->count();


        
        return view('dashboard', compact('barang', 'kategori', 'barangMasuk', 'barangKeluar'));
    }
}
