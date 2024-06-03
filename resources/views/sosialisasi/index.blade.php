@extends('layout.template')

@section('content')
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">Data Sosialisasi</h3>
        <div class="card-tools">
            <a class="btn btn-sm mt-1" href="{{ url('sosialisasi/create') }}" style="background-color: #1D3752; color: white;">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
        <table class="table table-bordered table-striped table-hover table-sm" id="table_sosialisasi">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Nama</th>
                    <th>Keterangan</th>
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
            var dataLevel = $('#table_sosialisasi').DataTable({
                serverSide: true,
                ajax: {
                    "url": "{{ url('sosialisasi/list') }}",
                    "dataType": "json",
                    "type": "POST"
                },
                columns: [
                    {
                        data: "id_sosialisasi",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "nama_sosialisasi",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "ket_sosialisasi",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "aksi",
                        className: "",
                        orderable: false,
                        searchable: false
                    }
                ]
            });
            $('#id_sosialisasi').on('change',function(){
                dataLevel.ajax.reload();
            })
        });
    </script>
@endpush
