@extends('layout.template')

@section('content')
<div>
    <h1>total kas</h1>
    <h1>{{$total->total}}</h1>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Tambah Kas
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       <form action="{{url('keuangan')}}" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label >Nomor Kartu Keluarga</label>
            <input type="text" name="nkk"  class="form-control" id="exampleInputEmail1" >
          </div>
      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit"  class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  @if (session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif
@if (session('error'))
  <div class="alert alert-danger">{{ session('error') }}</div>
@endif
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline">
            <div class="card-header">
                <h3 class="card-title">Edit Data Keuangan</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover table-sm" id="table_level">
                    <thead class="bg-primary-subtle">
                        <tr>
                            <th>ID Keuangan</th>
                            <th>Nama Penduduk</th>
                            <th>Tanggal</th>
                            <th>pemasukan</th>
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
                    }, {
                    data: "kepala_keluarga", 
                    className: "",
                    orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                    searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    },
                    
                    {
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