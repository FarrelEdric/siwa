@extends('layout.template')

@section('content')

<div style="width:100%;overflow-x: scroll;">
    <table style="width:100%;overflow-x:scroll; " class="table table-bordered text-center table-hover table-sm">
        <thead>
            <tr>
                <th> id</th>
                <th> id penduduk</th>
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
                  <td> {{$user->id_penduduk}} </td>
                  <td> {{$user->tgl_surat}} </td>
                  <td> {{$user->tujuan}} </td>
                  <td> {{$user->status}} </td>
            
                  <td class="d-flex gap-2 justify-content-center"><form method="POST" action="{{url('surat/konfirmasi/'.$user->id_surat)}}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="Diterima" id="">
                    <button class="btn btn-success" type="submit">konfirmasi</button></form>
                    <form method="POST" action="{{url('surat/konfirmasi/'.$user->id_surat)}}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status" value="Ditolak" id="">
                        <button class="btn btn-danger" type="submit">Tolak</button></form>
                </td>
              </tr>
             @endforeach
       </tbody>
    </table>
    
</div>
@endsection

