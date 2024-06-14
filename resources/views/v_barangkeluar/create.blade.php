@extends('layouts.adm-main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <form action="{{ route('barangkeluar.store') }}" method="POST" enctype="multipart/form-data">                    
                            @csrf

                    <div class="form-group">
    <label class="font-weight-bold">TGL_KELUAR</label>
    <input type="date" class="form-control @error('tgl_keluar') is-invalid @enderror" name="tgl_keluar" value="{{ old('tgl_keluar', date('Y-m-d')) }}" placeholder="Masukkan Tanggal Keluar">
    
    <!-- pesan kesalahan untuk tgl_keluar -->
    @error('tgl_keluar')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    @enderror
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif

                            <div class="form-group">
                                <label class="font-weight-bold">Quantity Keluar</label>
                                <input type="text" class="form-control @error('qty_keluar') is-invalid @enderror" name="qty_keluar" value="{{ old('qty_keluar') }}" placeholder="Masukkan Quantity">
                            
                                <!-- error message untuk nis -->
                                @error('qty_keluar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">BARANG_ID</label>
                                <select class="form-control" name="barang_id" id="">
                                    @foreach($barangId as $barangIdrow)
                                        <option value="{{$barangIdrow->id}}">Merk barang: {{$barangIdrow->merk}} -- Stok sekarang: {{$barangIdrow->stok}}</option>
                                    @endforeach
                                </select>
                            
                                <!-- error message untuk nis -->
                                @error('nis')
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