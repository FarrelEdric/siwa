@extends('layout.template')

@section('content')
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">Detail Sosialisasi</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        @empty($sosialisasi)
            <div class="alert alert-danger alert-dismissible">
                <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                Data yang Anda cari tidak ditemukan.
            </div>
        @else
            <div class="">
                <h1>{{ $sosialisasi->nama_sosialisasi }}</h1>
                <hr>
                <p><strong>ID :</strong> {{ $sosialisasi->id_sosialisasi }}</p>
                <p><strong>Nama:</strong> {{ $sosialisasi->nama_sosialisasi }}</p>
                <p><strong>Keterangan:</strong> {{ $sosialisasi->ket_sosialisasi }}</p>
                <p><strong>Gambar :</strong> {{ $sosialisasi->gambar }}</p>
                <p><strong>Dibuat:</strong> {{ $sosialisasi->created_at }}</p>
                <p><strong>Di Update:</strong> {{ $sosialisasi->update_at }}</p>
            </div>
        @endempty
        <a class="btn btn-sm" style="background-color: #1D3752; color: white;" href="{{ url('sosialisasi') }}">Kembali</a>
    </div>
</div>
@endsection
