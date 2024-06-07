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
        <form method="POST" action="{{ url('/organisasi/'. $organisasi->id_organisasi) }}" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_sosialisasi" class="control-label">Nama</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $organisasi->nama }}" required>
                    @error('nama_sosialisasi')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="ket_sosial" class="control-label">jabatan</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $organisasi->jabatan }}" required>
                    @error('ket_sosial')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
      <div class="form-group">
                <label for="ket_sosial" class="control-label">masa jabatan</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="masaJabatan" name="masaJabatan" value="{{ $organisasi->masaJabatan }}" required>
                    @error('ket_sosial')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="ket_sosial" class="control-label">Nomer Telepon</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="{{ $organisasi->no_tlp }}" required>
                    @error('ket_sosial')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="alamat" class="control-label">alamat</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $organisasi->alamat }}" required>
                    @error('email')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <div class="mt-2">
                        <input type="text" class="form-control" id="email" name="email" value="{{ $organisasi->email }}" required>
                        @error('ket_sosial')
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
