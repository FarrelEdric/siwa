@extends('layout.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('surat') }}" class="form-horizontal">
                @csrf
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">ID Penduduk</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="id_penduduk" name="id_penduduk" value="{{ old('id_penduduk') }}" required>
                        @error('id_penduduk')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Tanggal Surat</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="tgl_surat" name="tgl_surat" value="{{ old('tgl_surat') }}" required>
                        @error('tgl_surat')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Tujuan</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{ old('tujuan') }}" required>
                        @error('tujuan')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label"></label>
                    <div class="col-11">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a class="btn btn-sm btn-default ml-1" href="{{ url('surat') }}">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('css')
    <!-- Additional CSS -->
@endpush

@push('js')
    <!-- Additional JS -->
@endpush