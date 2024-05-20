@extends('layout.template')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Detail keuangan</h3>
                <div class="card-tools"></div>
            </div>
            <div class="card-body">
                @empty($keuangan)
                    <div class="alert alert-danger alert-dismissible">
                        <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                        Data yang Anda cari tidak ditemukan.
                    </div>
                @else
                    <table class="table table-bordered table-striped table-hover table-sm">
                        <tr>
                            <th>Nama </th>
                            <td>{{ $keuangan->nama }}</td>
                        </tr>
                        <tr>
                            <th>Jabatan</th>
                            <td>{{ $keuangan->keuangan }}</td>
                        </tr>
                        <tr>
                            <th>Masa Jabatan</th>
                            <td>{{ $keuangan->masaJabatan }}</td>
                        </tr>
                        <tr>
                            <th>no telepon</th>
                            <td>{{ $keuangan->no_tlp }}</td>
                        </tr>
                        <tr>
                            <th>alamat</th>
                            <td>{{ $keuangan->alamat }}</td>
                        </tr>
                        <tr>
                            <th>email</th>
                            <td>{{ $keuangan->email }}</td>
                        </tr>
                        <tr>
                    </table>
                @endempty
                <a href="{{ url('keuangan') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            </div>
        </div>
    </div>
</section>
@endsection
