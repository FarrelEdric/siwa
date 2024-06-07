@extends('layout.template')

@section('content')
<div class="card card-outline">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('/sosialisasi/'. $sosialisasi->id_sosial) }}" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_sosialisasi" class="control-label">Nama</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="nama_sosialisasi" name="nama_sosialisasi" value="{{ $sosialisasi->nama_sosial }}" required>
                    @error('nama_sosialisasi')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="ket_sosial" class="control-label">Keterangan</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="ket_sosial" name="ket_sosialisasi" value="{{ $sosialisasi->deskripsi }}" required>
                    @error('ket_sosial')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="gambar" class="control-label">Gambar</label>
                <div class="mt-2">
                    <input type="file" class="form-control" id="gambar" name="file_upload" accept=".jpg,.jpeg,.png" required>
                    @error('gambar')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="mt-3">
                    <button type="submit" class="btn btn-sm" style="background-color: #1D3752; color: white;">Simpan</button>
                    <a class="btn btn-sm" style="background-color: #F7C232; color: black;" href="{{ url('sosialisasi') }}">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
@endpush
