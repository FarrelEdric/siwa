@extends('layout.template')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Detail Keuangan</h3>
                <div class="card-tools"></div>
            </div>
            <div class="card-body">
                @empty($keuangan)
                    <div class="alert alert-danger alert-dismissible">
                        <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                        Data yang Anda cari tidak ditemukan.
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-sm">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Pemasukan</th>
                                    <td>{{ $keuangan->pemasukan_iuran }}</td>
                                </tr>
                                <tr>
                               
                            </tbody>
                        </table>
                    </div>
                @endempty
                <a href="{{ url('keuangan') }}" class="btn btn-sm btn-primary mt-2">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
