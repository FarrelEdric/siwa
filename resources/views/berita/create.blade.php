@extends('layout.template')

@section('content')
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
        <form method="POST" action="{{ url('berita') }}" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="form-group">
                <label for="nama_berita" class="control-label">Nama Kegiatan</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="nama_berita" name="nama_berita" value="{{ old('nama_berita') }}" required>
                    @error('nama_berita')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="waktu_pel_berita" class="control-label">Waktu</label>
                <div class="mt-2">
                    <input type="date" class="form-control" id="waktu_pel_berita" name="waktu_pel_berita" value="{{ old('waktu_pel_berita') }}" required>
                    @error('waktu_pel_berita')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="lokasi" class="control-label">Lokasi</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" required>
                    @error('lokasi')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi" class="control-label">Deskripsi Kegiatan</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ old('deskripsi') }}" required>
                    @error('deskripsi')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="file_upload" class="control-label">Gambar</label>
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