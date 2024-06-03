@extends('layout.template')

@section('content')

<div>
  <h1>Total Pengeluaran</h1>
  <h1>{{$total->total}}</h1>
</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Kas
</button>
@if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
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
     <form action="{{url('pengeluaran')}}" method="POST">
      @csrf
      @method('POST')
    
        <div class="form-group">
          <label >Keterangan Pengeluaran</label>
          <textarea class="form-control" name="keterangan_pengeluaran" placeholder="keterangan..."></textarea>
        </div>
        <div class="form-group">
          <label >Jumlah Pengeluaran</label>
          <input type="number" name="pengeluaran_iuran" placeholder="pengeluaran"  class="form-control"  >
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
<div style="width:100%;overflow-x: scroll;">
    <table style="width:100%;overflow-x:scroll; " class="table table-bordered text-center table-hover table-sm">
        <thead>
            <tr>
                <th>ID Pengeluaran</th>
                <th>Nama Penduduk</th>
                <th>Tanggal</th>
                <th>Pengeluaran</th>
          
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
             @foreach($data as $user)
              <tr>
                  <td> {{$user->id_pengeluaran}} </td>
                  <td> {{$user->user->username}} </td>
                  <td> {{$user->date}} </td>
                  <td> {{$user->pengeluaran_iuran}} </td>
               
            
                  <td class="d-flex gap-2 justify-content-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-{{$user->id_pengeluaran}}">
                        Detail
                      </button>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal-{{$user->id_pengeluaran}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Detail Surat</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group text-left">
                                    <label for="exampleInputEmail1">Keterangan Pengeluaran</label>
                                    <input readonly type="text" value="{{$user->keterangan_pengeluaran}}" class="form-control" id="exampleInputEmail1" >
                                  </div>
                            </div>
                            <div class="modal-footer">
                               
                            </div>
                          </div>
                        </div>
                      </div>
                </td>
              </tr>
             @endforeach
       </tbody>
    </table>
    
</div>
@endsection


@push('css')
@endpush

@push('js')
 
@endpush 