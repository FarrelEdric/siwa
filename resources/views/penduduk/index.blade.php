@extends('layout.template')

@section('content')

<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">Data Seluruh Warga</h3>
        <div class="card-tools">
            <a class="btn btn-sm mt-1" href="{{ url('penduduk/create') }}" style="background-color: #1D3752; color: white;">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
        <table class="table table-bordered table-striped table-hover table-sm" id="table_level">
            <thead>
                <tr>
                    <th>No KK</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                    <th>Jenis kelamin</th>
                    <th>Status</th>
                    <th>Tanggal Lahir</th>
                    <th>No Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            var dataLevel = $('#table_level').DataTable({
                serverSide: true,
                ajax: {
                    "url": "{{ url('penduduk/list') }}",
                    "dataType": "json",
                    "type": "POST"
                },
                columns: [
                    {
                        data: "no_kk",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "nik_penduduk",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "nama_penduduk",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "pekerjaan_penduduk",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "jenis_kelamin",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "status_penduduk",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "tgl_lahir_penduduk",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "no_tlp_penduduk",
                        className: "",
                        orderable: false,
                        searchable: false
                    },
                    
                    {
                        data: "aksi",
                        className: "",
                        orderable: false,
                        searchable: false
                    }
                ]
            });
            $('#level_id').on('change',function(){
                dataLevel.ajax.reload();
            })
        });
    </script>
    
    
@endpush
