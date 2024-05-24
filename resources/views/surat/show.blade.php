@extends('layout.template')

@section('content')
    <div class="card card-outline card-primary shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a href="{{ url('surat') }}" class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
        <div class="card-body">
            @empty($surat)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    Data yang Anda cari tidak ditemukan.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @else
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tbody>
                        <tr>
                            <th>ID Surat</th>
                            <td>{{ $surat->id_surat }}</td>
                        </tr>
                        <tr>
                            <th>ID Penduduk</th>
                            <td>{{ $surat->id_penduduk }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Surat</th>
                            <td>{{ $surat->tgl_surat }}</td>
                        </tr>
                        <tr>
                            <th>Tujuan</th>
                            <td>{{ $surat->tujuan }}</td>
                        </tr>
                    </tbody>
                </table>
            @endempty
        </div>
    </div>
@endsection

@push('css')
    <style>
        .card-header {
            background-color: #007bff;
            color: white;
        }
        .card-header .card-title {
            margin-bottom: 0;
        }
        .card-header .card-tools a {
            color: white;
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            $('.alert').alert();
        });
    </script>
@endpush
