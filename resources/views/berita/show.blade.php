@extends('layout.template')

@section('content')
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">Detail Beita</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        @empty($berita)
            <div class="alert alert-danger alert-dismissible">
                <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                Data yang Anda cari tidak ditemukan.
            </div>
        @else
            <div class="">
                <h1>{{ $berita->nama_berita }}</h1>
                <hr>
                <p><strong>Nama:</strong> {{ $berita->nama_berita }}</p>
                <p><strong>Tanggal Pelaksanaan:</strong> {{ $berita->waktu_pel_berita }}</p>
                <p><strong>Lokasi:</strong> {{ $berita->lokasi }}</p>
                <p><strong>Deskripsi:</strong> {{ $berita->deskripsi }}</p>
                <p><strong>Gambar :</strong> {{ $berita->gambar }}</p>
            </div>
        @endempty
        <a class="btn btn-sm" style="background-color: #1D3752; color: white;" href="{{ url('berita') }}">Kembali</a>
    </div>
</div>
@endsection