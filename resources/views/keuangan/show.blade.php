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
                            <th>pemasukan</th>
                            <td>{{ $keuangan->pemasukan_iuran }}</td>
                        </tr>
                        <tr>
                            <th>pengeluaran</th>
                            <td>{{ $keuangan->pengeluaran_iuran }}</td>
                        </tr>
                        <tr>
                            <th>total</th>
                            <td>{{ $keuangan->total }}</td>
                        </tr>
                        <tr>
                        <tr>
                    </table>
                @endempty
                <a href="{{ url('keuangan') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            </div>
        </div>
    </div>
</section>
@endsection
