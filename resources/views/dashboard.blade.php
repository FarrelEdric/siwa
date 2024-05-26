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

<div style="background-color: #1D3752; color: white;" class="w-100 rounded-2 px-3 py-5">
  <h1 class="text-left">Selamat Datang {{ Auth::user()->username }}</h1>
  <p>Jelajahi RW 06</p>
</div>

<h2 style="font-size: 30px;" class="mt-5 mb-3">Berita Terbaru</h2>
<div class="d-flex flex-wrap justify-content-between w-100">
  @foreach ($berita as $item)
    <div style="width: 48%; height: 280px; font-size: 1px; overflow-y: scroll;" class="card mb-4 rounded overflow p-3 d-flex flex-column">
      <img width="100%" src="{{ asset('images/' . $item->image) }}" class="rounded" alt="">
      <div class="content bg-white p-3 rounded">
        <h1 style="font-size: 15px;" class="font-weight-bold">{{ $item->jenis_kegiatan }}</h1>
        <h1 style="font-size: 15px;" class="font-weight-bold">{{ $item->tgl_kegiatan }}</h1>
        <p style="font-size: 12px;">
          {{ $item->deskripsi }}
        </p>
      </div>
    </div>
  @endforeach
</div>

<h2 style="font-size: 30px;" class="my-3">Pengajuan Surat</h2>
<div class="d-flex flex-wrap justify-content-between w-100">
  @foreach ($surat as $item)
    <div style="width: 100%;" class="card mb-4 rounded overflow p-3 d-flex flex-row align-items-center">
      <div style="width: 50px; height: 40px; background-color: #1D3752;" class="p-1 rounded d-flex justify-content-center align-items-center">
        <h3 style="font-size: 14px; color: white; margin: 0;">New</h3>
      </div>
      <p style="font-size: 16px; margin: 0 0 0 10px;">Surat {{ $item->tujuan }}, status {{ $item->status }}</p>
    </div>
  @endforeach
</div>

@endsection

@push('css')
@endpush

@push('js')
@endpush