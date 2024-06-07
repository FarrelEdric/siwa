
@extends('layout.template')

@section('content')
<div class="container">
  
    <div class="main-content">
       
        <div class="content">
            <table class="table table-bordered table-hover table-sm" id="table_level">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
               
            </table>
        </div>
    </div>
</div>
@endsection
  
@push('js')
<script>


$(document).ready(function() {
    var dataLevel = $('#table_level').DataTable({
    serverSide: true, // serverSide: true, jika ingin menggunakan server side processing
    ajax: {
        "url": "{{ url('/organisasi/list') }}",
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
            data: "nama", 
            className: "",
            orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
            searchable: true // searchable: true, jika ingin kolom ini bisa dicari
            },                    
            {
            data: "jabatan", 
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
