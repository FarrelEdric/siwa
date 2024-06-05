@extends('layout.template')

@section('content')
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">Detail Data Keuangan</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        @empty($keuangan)
            <div class="alert alert-danger alert-dismissible">
                <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                Data yang Anda cari tidak ditemukan.
            </div>
        @else
            <div class="">
                <p><strong>Tanggal:</strong> {{ $keuangan->date }}</p>
                <p><strong>Keterangan:</strong> {{ $keuangan->keterangan }}</p>
                <p><strong>Pemasukan Iuran:</strong> Rp. {{ number_format($keuangan->pemasukan_iuran, 2) }}</p>
                <p><strong>Pengeluaran Iuran:</strong> Rp. {{ number_format($keuangan->pengeluaran_iuran, 2) }}</p>
                <!-- Tambahkan field lainnya sesuai kebutuhan -->
            </div>
        @endempty
        <a href="{{ url('keuangan') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
    </div>
</div>
@endsection