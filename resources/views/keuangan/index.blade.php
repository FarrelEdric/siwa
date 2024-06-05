@extends('layout.template')

@section('content')
<div class="mb-3">
    <h4>Saldo: Rp. {{ number_format($saldo, 2) }}</h4>
</div>
<div style="overflow-x:auto !important" class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">Rekap Keuangan</h3>
        <div class="card-tools">
            <a class="{{Auth::user()->level_id != '1' ? 'd-none':''}} btn btn-sm mt-1" href="{{ url('keuangan/create') }}" style="background-color: #1D3752; color: white;">Tambah</a>
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
                    <th rowspan="2">ID Keuangan</th>
                    <th rowspan="2">Tanggal</th>
                    <th rowspan="2">Keterangan</th>
                    <th colspan="2" class="text-center">Jenis</th>
                    <th rowspan="2">Aksi</th>
                </tr>
                <tr>
                    <th class="text-center">Pemasukan</th>
                    <th class="text-center">Pengeluaran</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push('css')
<style>
    .table th, .table td {
        vertical-align: middle;
        text-align: center;
    }
</style>
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
                        className: "",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "date", 
                        className: "",
                        orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                        searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    },
                    {
                        data: "keterangan",
                        className: "",
                        orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                        searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    },
                    {
                        data: "pemasukan_iuran", 
                        className: "",
                        orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                        searchable: true, // searchable: true, jika ingin kolom ini bisa dicari
                        render: function(data, type, row) {
                            return data ? 'Rp. ' + parseInt(data).toLocaleString() + ',-' : '-';
                        }
                    },
                    {
                        data: "pengeluaran_iuran", 
                        className: "",
                        orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                        searchable: true, // searchable: true, jika ingin kolom ini bisa dicari
                        render: function(data, type, row) {
                            return data ? 'Rp. ' + parseInt(data).toLocaleString() + ',-' : '-';
                        }
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