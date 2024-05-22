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

<div class="bg-white rounded w-100 p-3 mb-3">
    <h2>Agenda Terbaru</h2>
    <ul>
        <li><p>Senin, 20 Maret 2023 - <span>Rapat Pengelola Keuangan</span></p></li>
        <li><p>Senin, 20 Maret 2023 - <span>Rapat Sosialisasi Bank Sampah</span></p></li>
    </ul>

</div>

<div class="bg-white rounded w-100 p-3 ">
    <h2>Pengajuan Surat</h2>
    <div class="border rounded border-dark p-3">
        <div style="width:50px;" class="p-1 rounded bg-orange d-flex justify-content-center align-items-center"><h3 style="font-size:14px;color:white;">New</h3></div>
        <h2 style="font-size:20px" class="font-weight-bold">Hallo User Ada Informasi Permintaan Surat</h2>
        <p style="font-size:16px;" >Surat kamu telah disetujui RT selanjutnya kamu bisa melakukan pengajuan kepada rw</p>
    </div>
   
</div>

@endsection

@push('css')
@endpush

@push('js')
   
@endpush 