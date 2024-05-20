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
              <div class="">
                <img src="{{$kegiatan->image}}" alt="">
                <h1>{{$kegiatan->jenis_kegiatan}}</h1>
                <h2>{{$kegiatan->tgl_kegiatan}}</h2>
   <p>{{$kegiatan->deskripsi}}</p>
              </div>
                @endempty
                <a href="{{ url('kegiatan') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            </div>
        </div>
    </div>
</section>
@endsection
