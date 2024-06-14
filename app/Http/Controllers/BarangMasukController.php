<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\Barang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\QueryException;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $rsetBarang = Barang::latest()->paginate(10);
        // return view('v_barang.index',compact('rsetBarang'));

        // return view('vsiswa.index');
        $namaProduk = BarangMasuk::with('barang')->get();
        $rsetBarangMasuk = BarangMasuk::all();
        return view('v_barangmasuk.index',compact('rsetBarangMasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $aKategori = array('blank'=>'Pilih Kategori',
        //                     'M'=>'Barang Modal',
        //                     'A'=>'Alat',
        //                     'BHP'=>'Bahan Habis Pakai',
        //                     'BTHP'=>'Bahan Tidak Habis Pakai'
        //                     );
        $barangId = Barang::all();
        return view('v_barangmasuk.create',compact('barangId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'tgl_masuk'              => 'required',
            'qty_masuk'              => 'required',
            'barang_id'       => 'required',
        ]);


        //create post
        BarangMasuk::create([
            'tgl_masuk'          => $request->tgl_masuk,
            'qty_masuk'          => $request->qty_masuk,
            'barang_id'   => $request->barang_id,
        ]);

        //redirect to index
        return redirect()->route('barangmasuk.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rsetBarangMasuk = BarangMasuk::find($id);

        return view('v_barangmasuk.show', compact('rsetBarangMasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $aKategori = array('blank'=>'Pilih Kategori',
        //                 'M'=>'Barang Modal',
        //                 'A'=>'Alat',
        //                 'BHP'=>'Bahan Habis Pakai',
        //                 'BTHP'=>'Bahan Tidak Habis Pakai'
        //             );

        $rsetBarangMasuk = BarangMasuk::find($id);
        $barangID = Barang::all();
        //return $rsetBarangMasuk;
        return view('v_barangmasuk.edit', compact('rsetBarangMasuk', 'barangID'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'tgl_masuk' => 'required',
        'qty_masuk' => 'required',
        'barang_id' => 'required',
    ]);

    $rsetBarangMasuk = BarangMasuk::find($id);
    $rsetBarangMasuk->update($request->all());

    return redirect()->route('barangmasuk.index')->with(['success' => 'Data Berhasil Diubah!']);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $rsetBarangMasuk = BarangMasuk::find($id);
    
            // Cek apakah stok barang cukup sebelum menghapus
            $stok_barang = $rsetBarangMasuk->barang->stok;
            $qty_masuk = $rsetBarangMasuk->qty_masuk;
            if ($stok_barang < $qty_masuk) {
                throw new \Exception('Stok barang tidak mencukupi untuk menghapus entri barang masuk ini');
            }
    
            // Hapus entri barang masuk jika stok mencukupi
            $rsetBarangMasuk->delete();
    
            return redirect()->route('barangmasuk.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } catch (\Exception $e) {
            return redirect()->route('barangmasuk.index')->with(['error' => $e->getMessage()]);
        }
    }
}
