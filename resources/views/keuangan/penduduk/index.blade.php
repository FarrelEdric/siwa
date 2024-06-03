@extends('layout.template')

@section('content')
<div style="width:100%;overflow-x: scroll;">
    <table style="width:100%;overflow-x:scroll; " class="table table-bordered text-center table-hover table-sm">
        <thead>
            <tr>
                <th>ID Keuangan</th>
                <th>Nama Penduduk</th>
                <th>Tanggal</th>
                <th>Total Kas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
             @foreach($data as $user)
              <tr>
                  <td> {{$user->id_keuangan}} </td>
                  <td> {{$user->kepala_keluarga}} </td>
                  <td> {{$user->date}} </td>
                  <td> {{$user->pemasukan_iuran}} </td>
               
            
                  <td class="d-flex gap-2 justify-content-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-{{$user->id_keuangan}}">
                        Detail
                      </button>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal-{{$user->id_keuangan}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <label for="exampleInputEmail1">Total Kas</label>
                                    <input readonly type="text" value="{{$user->pemasukan_iuran}}" class="form-control" id="exampleInputEmail1" >
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