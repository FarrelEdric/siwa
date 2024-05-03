@extends('layout.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @empty($surat)
            <div class="alert alert-danger alert-dismissible">
                <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                Data yang Anda cari tidak ditemukan.
            </div>
            @else
                <table class="table table-bordered table-striped table-hover table-sm">
                    <tr>
                        <th>id_surat</th>
                        <td>{{ $surat->id_surat }}</td>
                    </tr>
                    <tr>
                        <th>id_penduduk</th>
                        <td>{{ $surat->id_penduduk }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal_surat</th>
                        <td>{{ $surat->tgl_surat}}</td>
                    </tr>
                    <tr>
                        <th>tujuan</th>
                        <td>{{$surat->tujuan}}</td>
                    </tr>
                </table>
            @endempty
            <a href="{{ url('surat') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
    @endsection
    @push('css')
    @endpush
    @push('js')
    @endpush