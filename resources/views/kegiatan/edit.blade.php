@extends('layout.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            @empty($kegiatan)
                <div class="alert alert-danger alert-dismissible">
                    <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>
                    Data yang Anda cari tidak ditemukan.
                </div>
                <a href="{{ url('kegiatan') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
            @else
                <form method="POST" action="{{ url('/kegiatan/'.$kegiatan->id_kegiatan) }}" class="form-horizontal">
                    @csrf
                    @method('PUT') <!-- Add this line for editing, which requires PUT method -->
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">ID User</label>
                        <div class="col-11">
                            <!-- Display the ID User here -->
                            <input type="text" class="form-control" value="{{ $kegiatan->id_user }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Jenis Kegiatan</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="jenis_kegiatan" name="jenis_kegiatan" value="{{ old('jenis_kegiatan', $kegiatan->jenis_kegiatan) }}" required>
                            @error('jenis_kegiatan')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Tanggal Kegiatan</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" value="{{ old('tgl_kegiatan', $kegiatan->tgl_kegiatan) }}" required>
                            @error('tgl_kegiatan')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Lokasi</label>
                        <div class="col-11">
                            <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ old('lokasi', $kegiatan->lokasi) }}" required>
                            @error('lokasi')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label"></label>
                        <div class="col-11">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <a class="btn btn-sm btn-default ml-1" href="{{ url('kegiatan') }}">Kembali</a>
                        </div>
                    </div>
                </form>
            @endempty
        </div>
    </div>
@endsection

@push('css')
    <!-- Additional CSS -->
@endpush

@push('js')
    <!-- Additional JS -->
@endpush
