@extends('layout.template')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('/berita/' . $berita->id_berita) }}" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_berita" class="control-label">Nama Berita</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="nama_berita" name="nama_berita" value="{{ $berita->nama_berita }}" required>
                    @error('nama_berita')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="waktu_pel_berita" class="control-label">Waktu</label>
                <div class="mt-2">
                    <input type="date" class="form-control" id="waktu_pel_berita" name="waktu_pel_berita" value="{{ $berita->waktu_pel_berita }}" required>
                    @error('waktu_pel_berita')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="lokasi" class="control-label">Lokasi</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $berita->lokasi }}" required>
                    @error('lokasi')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi" class="control-label">Deskripsi</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $berita->deskripsi }}" required>
                    @error('deskripsi')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="gambar" class="control-label">Gambar</label>
                <div class="mt-2">
                    <input type="file" class="form-control" id="file_upload" name="file_upload" accept=".jpg,.jpeg,.png" required>
                    @error('gambar')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="mt-3">
                    <button type="submit" class="btn btn-sm" style="background-color: #1D3752; color: white;">Simpan</button>
                    <a class="btn btn-sm" style="background-color: #F7C232; color: black;" href="{{ url('berita') }}">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
@endpush


@extends('layout.template')

@section('content')
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">Detail Beita</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        @empty($berita)
            <div class="alert alert-danger alert-dismissible">
                <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                Data yang Anda cari tidak ditemukan.
            </div>
        @else
            <div class="">
                <h1>{{ $berita->nama_berita }}</h1>
                <hr>
                <p><strong>Nama:</strong> {{ $berita->nama_berita }}</p>
                <p><strong>Tanggal Pelaksanaan:</strong> {{ $berita->waktu_pel_berita }}</p>
                <p><strong>Lokasi:</strong> {{ $berita->lokasi }}</p>
                <p><strong>Deskripsi:</strong> {{ $berita->deskripsi }}</p>
                <p><strong>Gambar :</strong> {{ $berita->gambar }}</p>
            </div>
        @endempty
        <a class="btn btn-sm" style="background-color: #1D3752; color: white;" href="{{ url('berita') }}">Kembali</a>
    </div>
</div>
@endsection