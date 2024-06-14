@extends('layouts.adm-main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('barangkeluar.update',$rsetBarangKeluar->id) }}" method="POST" enctype="multipart/form-data">                    
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">tgl_keluar</label>
                                <input type="date" class="form-control @error('tgl_keluar') is-invalid @enderror" name="tgl_keluar" value="{{ old('tgl_keluar',$rsetBarangKeluar->tgl_keluar) }}" placeholder="Masukkan Nama Siswa">
                            
                                <!-- error message untuk nama -->
                                @error('tgl_keluar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">qty_keluar</label>
                                <input type="text" class="form-control @error('qty_keluar') is-invalid @enderror" name="qty_keluar" value="{{ old('qty_keluar',$rsetBarangKeluar->qty_keluar) }}" placeholder="Masukkan Nomor Induk Siswa">
                            
                                <!-- error message untuk qty_keluar -->
                                @error('qty_keluar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">barang_id</label>
                                <!-- <input type="number" class="form-control @error('barang_id') is-invalid @enderror" name="barang_id" value="{{ old('barang_id',$rsetBarangKeluar->barang_id) }}" placeholder="Masukkan Nomor Induk Siswa"> -->
                                <select name="barang_id" id="">
                                    <option value="{{ old('barang_id',$rsetBarangKeluar->barang_id) }}">{{ old('barang_id',$rsetBarangKeluar->barang_id) }}</option>
                                    @foreach($barangID as $rowbarangID)
                                    <option value="{{ $rowbarangID->id }}">{{ $rowbarangID->id }} - {{ $rowbarangID->merk }}

                                    </option>
                                    @endforeach
                                </select>
                                <!-- error message untuk qty_keluar -->
                                @error('barang_id')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>

 

            </div>
        </div>
    </div>
@endsection