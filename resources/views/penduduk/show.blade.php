@extends('layout.template')

@section('content')
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">Detail Data Warga</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        @empty($penduduk)
            <div class="alert alert-danger alert-dismissible">
                <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                Data yang Anda cari tidak ditemukan.
            </div>
        @else
            <div class="">
                <h1>{{ $penduduk->nama_penduduk }}</h1>
                <hr>
                <p><strong>No KK:</strong> {{ $penduduk->no_kk }}</p>
                <p><strong>NIK:</strong> {{ $penduduk->nik_penduduk }}</p>
                <p><strong>Nama:</strong> {{ $penduduk->nama_penduduk }}</p>
                <p><strong>Pekerjaan:</strong> {{ $penduduk->pekerjaan_penduduk }}</p>
                <p><strong>Status:</strong> {{ $penduduk->status_penduduk }}</p>
                <p><strong>Tanggal Lahir:</strong> {{ $penduduk->tgl_lahir_penduduk }}</p>
                <p><strong>No Telepon:</strong> {{ $penduduk->no_tlp_penduduk }}</p>
                <p><strong>Alamat:</strong> {{ $penduduk->alamat }}</p> <!-- Tambahkan alamat -->
            </div>
        @endempty
        <a href="{{ url('penduduk') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
    </div>
</div>
@endsection
