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
        <form method="POST" action="{{ url('sosialisasi') }}" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            <div class="form-group">    
                <label for="nama_sosial" class="control-label">Nama</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="nama_sosial" name="nama_sosial" value="{{ old('nama_sosial') }}" required>
                    @error('nama_sosial')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="ket_sosial" class="control-label">Keterangan</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="ket_sosial" name="ket_sosial" value="{{ old('ket_sosial') }}" required>
                    @error('ket_sosial')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="file upload" class="control-label">Gambar</label>
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
                    <a class="btn btn-sm" style="background-color: #F7C232; color: black;" href="{{ url('sosialisasi') }}">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
@endpush
