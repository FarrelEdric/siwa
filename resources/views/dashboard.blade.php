@extends('layout.template')

@section('content')

@push('css')
<style>
  .overflow::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.overflow::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
.overflow::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
.overflow::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
@endpush

 
<h1 class="text-center">Selamat Datang Warga RW 11</h1>

<h2>Berita Terbaru</h2>
<div class="d-flex justify-content-around flex-wrap">
        <div style="width:450px;height:112px; font-size:1px;overflow-y: scroll;" class="card rounded overflow  d-flex flex-row">
            <img src="{{asset('images/ramadhan.png')}}" class="rounded" alt="">
            <div class="content bg-white p-3 rounded">
                <h1 style="font-size:15px;" class="font-weight-bold">Selamat Hari Raya Idul Fitri</h1>
                <h1 style="font-size:15px;" class="font-weight-bold">11 April 2024</h1>
                <p style="font-size:12px;">
                    Segenap Warga dan Pengurus
Rukun Warga 11 Tanjung Rejo 
mengucapkan Selamat Hari Raya Idul Fitri
                </p>
            </div>
        </div>
        <div style="width:450px;height:112px;font-size:1px;overflow-y: scroll;" class="card rounded overflow  d-flex flex-row">
            <img src="{{asset('images/ramadhan.png')}}" class="rounded" alt="">
            <div class="content bg-white p-3 rounded">
                <h1 style="font-size:15px;" class="font-weight-bold">Selamat Hari Raya Idul Adha</h1>
                <h1 style="font-size:15px;" class="font-weight-bold">28 Mei 2024</h1>
                <p style="font-size:12px;">
                    Segenap Warga dan Pengurus
Rukun Warga 11 Tanjung Rejo 
mengucapkan Selamat Hari Raya Idul Adha
                </p>
            </div>
        </div>

</div>

<h2 style="font-size:32px;" class="mt-5 mb-3" >Berita Terbaru</h2>
<div  class="d-flex sm-flex-wrap w-100">
@foreach ($berita as $item)
    <div style="width:800px; height:300px; font-size:1px;overflow-y: scroll;" class="card ml-5 rounded overflow p-3 d-flex flex-column">
        
            <img  width="100%"  src="{{asset('images/'.$item->image)}}" class="rounded" alt="">
     
        <div class="content bg-white p-3 rounded">
            <h1 style="font-size:15px;" class="font-weight-bold">{{$item->jenis_kegiatan}}</h1>
            <h1 style="font-size:15px;" class="font-weight-bold">{{$item->tgl_kegiatan  }}</h1>
            <p style="font-size:12px;">
                {{$item->deskripsi}}
            </p>
        </div>
    </div>

    
    @endforeach
</div>


<h2 style="font-size:32px;" class="my-3" >Pengajuan Surat</h2>
<div class="bg-white rounded w-100 p-3 ">
    <div class=" rounded-2  p-3">
    @foreach ($surat as $item)
       <div class="d-flex flex-row align-items-center  gap-2 mb-2">
        <div style="width:50px;background-color:#3498db;" class="p-1 rounded  d-flex justify-content-center align-items-center"><h3 style="font-size:14px;color:white;">New</h3></div>
    
        <p style="font-size:16px;" class="m-0" >Surat {{$item->tujuan}}, status {{$item->status}}</p>
       </div>
       <hr>
        @endforeach
    </div>
   
</div>

@endsection

@push('css')
@endpush

@push('js')
   
@endpush