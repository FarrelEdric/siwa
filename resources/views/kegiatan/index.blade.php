@extends('layout.template')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Daftar Berita Kegiatan Warga</h3>
                <div class="card-tools">
                    <a class="btn btn-sm btn-primary mt-1" href="{{ url('kegiatan/create') }}">Tambah</a>
                </div>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <table class="table table-bordered table-striped table-hover table-sm" id="table_kegiatan">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Kegiatan</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Lokasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
@endsection

@push('css')
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            var dataKegiatan = $('#table_kegiatan').DataTable({
                serverSide: true, // Menggunakan server-side processing
                ajax: {
                    "url": "{{ url('/kegiatan/list') }}",
                    "dataType": "json",
                    "type": "POST"
                },
                columns: [
                    {
                        data: "DT_RowIndex", // Nomor urut dari laravel datatable addIndexColumn()
                        className: "text-center",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "jenis_kegiatan",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "tgl_kegiatan",
                        className: "",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "lokasi",
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
        });
    </script>
@endpush