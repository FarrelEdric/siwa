@extends('layout.template')

@section('content')
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">Data Berita warga</h3>
       
    </div>
    <div class="card-body">

      
        @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
       
                @foreach ($berita as $item)
                   <div style="flex-wrap:wrap!important;margin-bottom:1rem;" class="row w-100">
                                        <div style="max-height:300px;min-width:200px" class="col-md-6" >
                                            <img   style="width:100%;height:100%; object-fit: cover" src="{{$item->gambar == null ? 'https://agrotek.id/vip/wp-content/uploads/2021/07/Pengertian-Tujuan-Proses-Fungsi-dan-Contoh-Sosialisasi.jpg' : 'uploads/'.$item->gambar}}" alt="">
                                        </div> 
                                        <div class="col-md-6  ">  
                                        <h5>{{$item->nama_berita}}</h5>   
                                        <h5>{{$item->lokasi}}</h5>   
                                        <h5>{{$item->waktu_pel_berita}}</h5>   
                                        <p>{{$item->deskripsi}}</p> 
                                        </div>      
                   </div>
                @endforeach
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')

@endpush
