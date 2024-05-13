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
                    <table class="table table-bordered table-striped table-hover table-sm">
                        <tr>
                            <th>ID Kegiatan</th>
                            <td>{{ $kegiatan->id_kegiatan }}</td>
                        </tr>
                        <tr>
                            <th>ID User</th>
                            <td>{{ $kegiatan->id_user }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kegiatan</th>
                            <td>{{ $kegiatan->jenis_kegiatan }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Kegiatan</th>
                            <td>{{ $kegiatan->tgl_kegiatan }}</td>
                        </tr>
                        <tr>
                            <th>Lokasi</th>
                            <td>{{ $kegiatan->lokasi }}</td>
                        </tr>
                    </table>
                @endempty
                <a href="{{ url('kegiatan') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            </div>
        </div>
    </div>
</section>
@endsection
