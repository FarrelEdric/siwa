@extends('layout.template')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Detail Kegiatan</h3>
                <div class="card-tools"></div>
            </div>
            <div class="card-body">
                @empty($kegiatan)
                    <div class="alert alert-danger alert-dismissible">
                        <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                        Data yang Anda cari tidak ditemukan.
                    </div>
                @else
                <div class="d-flex flex-column align-items-center">
                    <div class="mb-4">
                        <img src="{{$kegiatan->image}}" alt="Gambar Kegiatan" class="img-fluid rounded shadow-sm">
                    </div>
                    <div class="text-center">
                        <h1 class="mb-3">{{$kegiatan->jenis_kegiatan}}</h1>
                        <h2 class="text-muted mb-4">{{$kegiatan->tgl_kegiatan}}</h2>
                        <p>{{$kegiatan->deskripsi}}</p>
                    </div>
                </div>
                @endempty
                <div class="text-center mt-4">
                    <a href="{{ url('kegiatan') }}" class="btn btn-sm btn-default">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
