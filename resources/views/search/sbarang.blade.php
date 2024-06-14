<!-- resources/views/search/sbarang.blade.php -->

@extends('layouts.adm-main')

@section('content')
<div class='mt-4 text-gray-700'>Hasil pencarian untuk '<span class='text-orange-500'><b>{{ $query }}</b></span>'
<br><hr><br><br>
<h3>Barang</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Merk</th>
            <th>Seri</th>
            <th>Spesifikasi</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($rsetResultsBarang as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->merk }}</td>
                <td>{{ $row->seri }}</td>
                <td>{{ $row->spesifikasi }}</td>
                <td>{{ $row->stok }}</td>
                <td class="text-center"> 
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('barang.destroy', $row->id) }}" method="POST">
                    <a href="{{ route('barang.show', $row->id) }}" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></a>
                    <a href="{{ route('barang.edit', $row->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Data Barang belum tersedia</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
