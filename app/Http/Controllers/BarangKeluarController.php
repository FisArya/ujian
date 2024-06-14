<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\Barang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;


class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $rsetBarang = Barang::latest()->paginate(10);
        // return view('v_barang.index',compact('rsetBarang'));

        // return view('vsiswa.index');

        $namaProduk = BarangKeluar::with('barang')->get();
        $rsetBarangKeluar = BarangKeluar::all();
        return view('v_barangkeluar.index',compact('rsetBarangKeluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangId = Barang::all();
        return view('v_barangkeluar.create',compact('barangId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Ambil data barang berdasarkan barang_id
        $barang = Barang::find($request->barang_id);

        // Jika barang tidak ditemukan, buat validator gagal
        if (!$barang) {
            return redirect()->route('barangkeluar.create')
                             ->withErrors(['barang_id' => 'Barang tidak ditemukan.'])
                             ->withInput();
        }

        // Ambil tgl_masuk dari BarangMasuk berdasarkan barang_id
        $barangMasuk = BarangMasuk::where('barang_id', $request->barang_id)->first();

        // Jika tidak ada data masuk untuk barang tersebut
        if (!$barangMasuk) {
            return redirect()->route('barangkeluar.create')
                             ->withErrors(['barang_id' => 'Data masuk untuk barang ini tidak ditemukan.'])
                             ->withInput();
        }

        // Validasi input
        $validator = Validator::make($request->all(), [
            'tgl_keluar' => 'required|date|after_or_equal:' . $barangMasuk->tgl_masuk,
            'qty_keluar' => 'required|integer|min:1',
            'barang_id' => 'required|exists:barang,id',
        ], [
            'tgl_keluar.after_or_equal' => 'Tanggal keluar harus setelah atau sama dengan tanggal masuk.',
        ]);

        // Validasi tambahan setelah validasi awal
        $validator->after(function ($validator) use ($barang, $request) {
            // Pastikan stok mencukupi
            if ($barang->stok < $request->qty_keluar) {
                $validator->errors()->add('qty_keluar', 'Stok tidak mencukupi.');
            }
        });

        if ($validator->fails()) {
            return redirect()->route('barangkeluar.create')
                             ->withErrors($validator)
                             ->withInput();
        }

        // Buat data barang keluar
        BarangKeluar::create([
            'tgl_keluar' => $request->tgl_keluar,
            'qty_keluar' => $request->qty_keluar,
            'barang_id' => $request->barang_id,
        ]);

        // Kurangi stok barang
        $barang->stok -= $request->qty_keluar;
        $barang->save();

        return redirect()->route('barangkeluar.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rsetBarangKeluar = BarangKeluar::find($id);

        return view('v_barangkeluar.show', compact('rsetBarangKeluar'));
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

        $rsetBarangKeluar = BarangKeluar::find($id);
        $barangID = Barang::all();
        //return $rsetBarang;
        return view('v_barangkeluar.edit', compact('rsetBarangKeluar','barangID'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate( [
        'tgl_keluar' => 'required',
        'qty_keluar' => 'required',
        'barang_id' => 'required',
    ]);

    $rsetBarangKeluar = BarangKeluar::find($id);
    $rsetBarangKeluar->update($request->all());

    return redirect()->route('barangkeluar.index')->with(['Success' => 'Data Berhasil Diubah!']);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rowbarangkeluar = BarangKeluar::find($id);
        //delete image

        //delete post
        $rowbarangkeluar->delete();

        //redirect to index
        return redirect()->route('barangkeluar.index')->with(['Success' => 'Data Berhasil Dihapus!']);
    }
}
