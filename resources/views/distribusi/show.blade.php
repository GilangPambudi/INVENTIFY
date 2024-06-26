@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    <div class="card-tools"></div>
    </div>
    <div class="card-body">
    @empty($distribusi)
        <div class="alert alert-danger alert-dismissible">
            <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5> Data yang Anda cari tidak ditemukan.
        </div>
        @else
    <table class="table table-bordered table-striped table-hover tablesm">
        <tr>
            <th>ID</th>
            <td>{{ $distribusi->id_distribusi }}</td>
        </tr>
        <tr>
            <th>Nama Barang</th>
            <td>{{ $distribusi->barang->nama_barang }}</td>
        </tr>
        <tr>
            <th>NUP Barang</th>
            <td>{{ $distribusi->barang->NUP }}</td>
        </tr>
        <tr>
            <th>Ruangan</th>
            <td>{{ $distribusi->ruang->nama_ruang }}</td>
        </tr>
        <tr>
            <th>Penanggung Jawab Ruangan</th>
            <td>{{ $distribusi->ruang->penanggung_jawab }}</td>
        </tr>
        <tr>
            <th>Kondisi Awal</th>
            <td>{{ $distribusi->statusAwal->nama_status }}</td>
        </tr>
        <tr>
            <th>Kondisi Akhir</th>
            <td>{{ $distribusi->statusAkhir->nama_status }}</td>
        </tr>
        </table>
    @endempty
    <a href="{{ url('distribusi') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush