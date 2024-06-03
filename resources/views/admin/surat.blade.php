@extends('layout.template')

@section('content')

<div style="width:100%;overflow-x: scroll;">
    <table style="width:100%;overflow-x:scroll; " class="table table-bordered text-center table-hover table-sm">
        <thead>
            <tr>
                <th> id</th>
                <th>Nama Pengaju</th>
                <th> tanggal </th>
                <th> tujuan </th>
                <th> status</th>
                <th> aksi</th>
            </tr>
        </thead>
        <tbody>
             @foreach($surat as $user)
              <tr>
                  <td> {{$user->id_surat}} </td>
                  <td> {{$user->penduduk->nama_penduduk}} </td>
                  <td> {{$user->tgl_surat}} </td>
                  <td> {{$user->tujuan}} </td>
                  <td> {{$user->status}} </td>
            
                  <td class="d-flex gap-2 justify-content-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-{{$user->id_surat}}">
                        Detail
                      </button>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal-{{$user->id_surat}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Detail Surat</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form class="text-left">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Nama Penduduk</label>
                                  <input readonly type="text" value="{{$user->penduduk->nama_penduduk}}" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Tujuan</label>
                                  <input readonly type="text" value="{{$user->tujuan}}" class="form-control" id="exampleInputEmail1" >
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                                <form method="POST" action="{{url('surat/konfirmasi/'.$user->id_surat)}}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="Diterima" id="">
                                    <button class="btn btn-success" type="submit">konfirmasi</button></form>
                                    <form method="POST" action="{{url('surat/konfirmasi/'.$user->id_surat)}}">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="status" value="Ditolak" id="">
                                        <button class="btn btn-danger" type="submit">Tolak</button></form>
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

