@extends('layout.template')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Data Keuangan</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover table-sm" id="table_level">
                    <thead class="bg-primary-subtle">
                        <tr>
                            <th>ID Keuangan</th>
                            <th>Bulan/Tahun</th>
                            <th>pemasukan</th>
                            <th>pengeluaran</th>
                            <th>total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection


@push('css')
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            var dataLevel = $('#table_level').DataTable({
            serverSide: true, // serverSide: true, jika ingin menggunakan server side processing
            ajax: {
                "url": "{{ url('keuangan/list') }}",
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
                    data: "date", 
                    className: "",
                    orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                    searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    },{
                    data: "pemasukan_iuran", 
                    className: "",
                    orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                    searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    },          
                    {
                    data: "pengeluaran_iuran", 
                    className: "",
                    orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                    searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    },   
                    {
                    data: "total", 
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