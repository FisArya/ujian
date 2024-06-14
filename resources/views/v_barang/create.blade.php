@extends('layouts.adm-main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">                    
                            @csrf

                            <div class="form-group">
    <label class="font-weight-bold">MERK</label>
    <input type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" value="{{ old('merk') }}" placeholder="Masukkan Merk">
    
    <!-- error message untuk merk -->
    @error('merk')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label class="font-weight-bold">SERI</label>
    <input type="text" class="form-control @error('seri') is-invalid @enderror" name="seri" value="{{ old('seri') }}" placeholder="Masukkan Seri">
    
    <!-- error message untuk seri -->
    @error('seri')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label class="font-weight-bold">SPESIFIKASI</label>
    <input type="text" class="form-control @error('spesifikasi') is-invalid @enderror" name="spesifikasi" value="{{ old('spesifikasi') }}" placeholder="Masukkan Spesifikasi">
    
    <!-- error message untuk spesifikasi -->
    @error('spesifikasi')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    @enderror
</div>

<div class="form-group">
    <label class="font-weight-bold">STOK</label>
    <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok') }}" placeholder="Masukkan Stok">
    
    <!-- error message untuk stok -->
    @error('stok')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    @enderror
</div>


                            <div class="form-group">
                                <label class="font-weight-bold">KATEGORI_ID</label>
                                <!-- <input type="number" class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id" value="{{ old('nis') }}" placeholder="Masukkan kategori_id"> -->
                                <!-- <select name="kategori" id="" class="form-control">
                                    @foreach($kategori as $rowkategori)
                                    <option value="{{ $rowkategori->id }}">{{ $rowkategori->id }} - {{ $rowkategori->deskripsi }}</option>
                                    @endforeach
                                </select> -->
                                <select class="form-control " name="kategori_id" aria-label="Default select example">
                                        <option value="blank" selected>Pilih Kategori</option>
                                        @foreach($kategori as $rowkategori)
                                            <option value="{{ $rowkategori->id }}">{{ $rowkategori->id }} - {{ $rowkategori->deskripsi }}</option>
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