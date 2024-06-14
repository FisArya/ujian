@extends('layouts.adm-main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('barangmasuk.store') }}" method="POST" enctype="multipart/form-data">                    
                            @csrf

                          <div class="form-group">
    <label class="font-weight-bold">TGL_MASUK</label>
    <input type="date" class="form-control @error('tgl_masuk') is-invalid @enderror" name="tgl_masuk" value="{{ old('tgl_masuk', date('Y-m-d')) }}" placeholder="Masukkan Tanggal Masuk">
    
    <!-- pesan kesalahan untuk tgl_masuk -->
    @error('tgl_masuk')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    @enderror
</div>


                            <div class="form-group">
                                <label class="font-weight-bold">QTY</label>
                                <input type="text" class="form-control @error('nis') is-invalid @enderror" name="qty_masuk" value="{{ old('nis') }}" placeholder="Masukkan Quantity">
                            
                                <!-- error message untuk nis -->
                                @error('nis')
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