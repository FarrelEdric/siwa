@extends('layout.template')

@section('content')

@push('css')
<style>
  .overflow::-webkit-scrollbar {
    width: 5px;
  }

  .overflow::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  .overflow::-webkit-scrollbar-thumb {
    background: #888;
  }

  .overflow::-webkit-scrollbar-thumb:hover {
    background: #555;
  }

  .card-custom {
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    border: none;
    border-radius: 12px;
    overflow: hidden;
    margin-bottom: 20px;
  }

  .card-custom:hover {
    transform: scale(1.03);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  }

  .card-header-custom {
    font-size: 16px;
    font-weight: bold;
    color: #333;
  }

  .card-body-custom {
    font-size: 13px;
    color: #555;
  }

  .news-section {
    margin-top: 40px;
  }

  .news-item {
    margin-bottom: 20px;
  }

  .section-title {
    font-size: 28px;
    margin-top: 40px;
    margin-bottom: 20px;
    font-weight: bold;
    color: #3498db;
  }

  .badge-custom {
    background-color: #3498db;
    color: white;
    font-size: 12px;
    padding: 5px 8px;
    border-radius: 5px;
  }

  .surat-item {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 10px;
  }

  .surat-item p {
    margin: 0;
    font-size: 14px;
    color: #555;
  }

  .surat-container {
    padding: 15px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .container-custom {
    max-width: 1200px;
  }
</style>
@endpush

<div class="container container-custom mt-4">
  <h1 class="text-center mb-4">Selamat Datang Warga RW 11 <br> Tanjung Rejo</h1>

  <h2 class="section-title">Berita Terbaru</h2>
  <div class="row news-section">
    <div class="col-md-6 news-item">
      <div class="card card-custom overflow">
        <div class="d-flex">
          <img src="{{ asset('images/ramadhan.png') }}" class="img-fluid rounded-start" alt="Idul Fitri">
          <div class="card-body bg-white p-3 rounded-end">
            <h5 class="card-header-custom">Selamat Hari Raya Idul Fitri</h5>
            <h6 class="font-weight-bold">11 April 2024</h6>
            <p class="card-body-custom">Segenap Warga dan Pengurus Rukun Warga 11 Tanjung Rejo mengucapkan Selamat Hari Raya Idul Fitri</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 news-item">
      <div class="card card-custom overflow">
        <div class="d-flex">
          <img src="{{ asset('images/ramadhan.png') }}" class="img-fluid rounded-start" alt="Idul Adha">
          <div class="card-body bg-white p-3 rounded-end">
            <h5 class="card-header-custom">Selamat Hari Raya Idul Adha</h5>
            <h6 class="font-weight-bold">28 Mei 2024</h6>
            <p class="card-body-custom">Segenap Warga dan Pengurus Rukun Warga 11 Tanjung Rejo mengucapkan Selamat Hari Raya Idul Adha</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <h2 class="section-title">Berita Terbaru</h2>
  <div class="row">
    @foreach ($berita as $item)
      <div class="col-md-6 news-item">
        <div class="card card-custom overflow">
          {{-- <img src="{{ asset('images/'.$item->image) }}" class="img-fluid rounded mb-2" alt="{{ $item->jenis_kegiatan }}"> --}}
          <div class="card-body bg-white p-3 rounded">
            <h5 class="card-header-custom">{{ $item->jenis_kegiatan }}</h5>
            <h6 class="font-weight-bold">{{ $item->tgl_kegiatan }}</h6>
            <p class="card-body-custom">{{ $item->deskripsi }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <h2 class="section-title">Pengajuan Surat</h2>
  <div class="surat-container">
    @foreach ($surat as $item)
      <div class="surat-item">
        <div class="badge-custom">New</div>
        <p>Surat {{ $item->tujuan }}, status {{ $item->status }}</p>
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
