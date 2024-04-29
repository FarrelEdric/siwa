@extends('layout.template')

@section('content')
<div class="container">
    <h1>Edit Data surat</h1>
    <table class="table table-bordered table-striped table-hover table-sm" id="table_level">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID PENDUDUK</th>
                <th>Tanggal SURAT</th>
                <th>tujuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
    </table>
</div>


@endsection
@push('css')
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            var dataLevel = $('#table_level').DataTable({
            serverSide: true, // serverSide: true, jika ingin menggunakan server side processing
            ajax: {
                "url": "{{ url('/list') }}",
                "dataType": "json",
                "type": "POST"
            },
            columns: [
                {
                    data: "DT_RowIndex", // nomor urut dari laravel datatable addIndexColumn()
                    className: "text-center",
                    orderable: false,
                    searchable: false
                    },{
                    data: "id_penduduk", 
                    className: "",
                    orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                    searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    },{
                    data: "tgl_surat", 
                    className: "",
                    orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                    searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    },                    
                    {
                    data: "tujuan", 
                    className: "",
                    orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                    searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    },                   
                    {
                    data: "aksi", 
                    className: "",
                    orderable: false, // orderable: true, jika ingin kolom ini bisa  diurutkan
                    searchable: false // searchable: true, jika ingin kolom ini bisa dicari

                    }
                ]
            });
            $('#level_id').on('change',function(){
                dataLevel.ajax.reload();
            })
        });
    </script>
@endpush 