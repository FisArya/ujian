<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        $type = $request->input('type'); // Menambahkan parameter 'type'

        if ($type == 'barang') {
            $rsetResultsBarang = Barang::where('merk', 'like', '%' . $query . '%')
                                      ->orWhere('seri', 'like', '%' . $query . '%')
                                      ->get();
            return view('search.sbarang', compact('rsetResultsBarang', 'query'));
        } elseif ($type == 'kategori') {
            $rsetResultsKategori = Kategori::where('deskripsi', 'like', '%' . $query . '%')
                                           ->orWhere('kategori', 'like', '%' . $query . '%')
                                           ->get();
            return view('search.skategori', compact('rsetResultsKategori', 'query'));
        } else {
            return redirect()->back()->with('error', 'Tipe pencarian tidak valid.');
        }
    }
}
