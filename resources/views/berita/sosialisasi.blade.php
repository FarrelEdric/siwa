@extends('layout.template')

@section('content')
<section class="content">
    <div class="container-fluid">
       @foreach ($data as $item)
       <div class="bg-white rounded d-flex gap-3 w-100 p-3 mb-3">
        <img  style="width:300px"  src="{{asset('images/'.$item->image)}}" alt="">
       <div>
        <h1 style="font-size:24px;" class="font-weight-bold">{{$item->jenis_kegiatan}}</h1>
        <h2 style="font-size:24px;" class="font-weight-bold">{{$item->tgl_kegiatan}}</h2>
        <h2 style="font-size:16px;" class="">{{$item->deskripsi}}</h2>
        <a href="{{url('kegiatan/'.$item->id_kegiatan)}}">Detail</a>
       </div>

    </div>
       @endforeach
    </div>
    <!-- /.container-fluid -->
</section>
@endsection

@push('css')
@endpush

