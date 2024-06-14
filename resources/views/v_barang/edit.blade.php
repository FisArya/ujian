@extends('layouts.adm-main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('barang.update',$rsetBarang->id) }}" method="POST" enctype="multipart/form-data">                    
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">merk</label>
                                <input type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" value="{{ old('merk',$rsetBarang->merk) }}" placeholder="Masukkan Nama Siswa">
                            
                                <!-- error message untuk nama -->
                                @error('merk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">NIS</label>
                                <input type="text" class="form-control @error('seri') is-invalid @enderror" name="seri" value="{{ old('seri',$rsetBarang->seri) }}" placeholder="Masukkan Nomor Induk Siswa">
                            
                                <!-- error message untuk seri -->
                                @error('seri')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">spesifikasi</label>
                                <input type="text" class="form-control @error('spesifikasi') is-invalid @enderror" name="spesifikasi" value="{{ old('spesifikasi',$rsetBarang->spesifikasi) }}" placeholder="Masukkan Nomor Induk Siswa">
                            
                                <!-- error message untuk spesifikasi -->
                                @error('spesifikasi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">stok</label>
                                <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok',$rsetBarang->stok) }}" placeholder="Masukkan Nomor Induk Siswa">
                            
                                <!-- error message untuk seri -->
                                @error('stok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">kategori_id</label>
                                <!-- <input type="number" class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id" value="{{ old('kategori_id',$rsetBarang->kategori_id) }}" placeholder="Masukkan Nomor Induk Siswa"> -->
                                <select name="kategori_id" id="">
                                    @foreach($kategoriID as $map)
                                    <option value="{{$map->id}}">{{$map->id}}</option>
                                    @endforeach
                                </select>
                                <!-- error message untuk seri -->
                                @error('kategori_id')
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