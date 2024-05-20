@extends('layout.template')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Detail organisasi</h3>
                <div class="card-tools"></div>
            </div>
            <div class="card-body">
                @empty($organisasi)
                    <div class="alert alert-danger alert-dismissible">
                        <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                        Data yang Anda cari tidak ditemukan.
                    </div>
                @else
                    <table class="table table-bordered table-striped table-hover table-sm">
                        <tr>
                            <th>Nama </th>
                            <td>{{ $organisasi->nama }}</td>
                        </tr>
                        <tr>
                            <th>Jabatan</th>
                            <td>{{ $organisasi->jabatan }}</td>
                        </tr>
                        <tr>
                            <th>Masa Jabatan</th>
                            <td>{{ $organisasi->masaJabatan }}</td>
                        </tr>
                        <tr>
                            <th>no telepon</th>
                            <td>{{ $organisasi->no_tlp }}</td>
                        </tr>
                        <tr>
                            <th>alamat</th>
                            <td>{{ $organisasi->alamat }}</td>
                        </tr>
                        <tr>
                            <th>email</th>
                            <td>{{ $organisasi->email }}</td>
                        </tr>
                        <tr>
                    </table>
                @endempty
                <a href="{{ url('organisasi') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            </div>
        </div>
    </div>
</section>
@endsection
