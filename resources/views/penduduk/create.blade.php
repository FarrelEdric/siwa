@extends('layout.template')

@section('content')
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('penduduk') }}" class="form-horizontal">
            @csrf
            <div class="form-group">
                <label for="no_kk" class="control-label">NKK</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="no_kk" name="nkk" value="{{ old('no_kk') }}" required>
                    @error('no_kk')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="nik_penduduk" class="control-label">NIK</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="nik_penduduk" name="nik_penduduk" value="{{ old('nik_penduduk') }}" required>
                    @error('nik_penduduk')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="nik_penduduk" class="control-label">Password</label>
                <div class="mt-2">
                    <input type="password" class="form-control" id="password" name="password"  required>
                    @error('password')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="nama_penduduk" class="control-label">Nama</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="nama_penduduk" name="nama_penduduk" value="{{ old('nama_penduduk') }}" required>
                    @error('nama_penduduk')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="pekerjaan_penduduk" class="control-label">Pekerjaan</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="pekerjaan_penduduk" name="pekerjaan_penduduk" value="{{ old('pekerjaan_penduduk') }}" required>
                    @error('pekerjaan_penduduk')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin" class="control-label">Jenis kelamin</label>
                <div class="mt-2">
                    <div class="input-group">
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value=""></option>
                            <option value="laki-laki" {{ old('jenis_kelamin') == 'aktif' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text"><i class="fas fa-chevron-down"></i></div>
                        </div>
                    </div>
                    @error('jenis_kelamin')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="status_penduduk" class="control-label">Status</label>
                <div class="mt-2">
                    <div class="input-group">
                        <select class="form-control" id="status_penduduk" name="status_penduduk" required>
                            <option value="">- Pilih Status -</option>
                            <option value="aktif" {{ old('status_penduduk') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="tidak aktif" {{ old('status_penduduk') == 'tidak aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text"><i class="fas fa-chevron-down"></i></div>
                        </div>
                    </div>
                    @error('status_penduduk')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
         
            <div class="form-group">
                <label for="status_penduduk" class="control-label">RT</label>
                <div class="mt-2">
                    <div class="input-group">
                        <select class="form-control" id="rt" name="rt" required>
                            <option value="">- Pilih RT -</option>
                            <option value="01" >01</option>
                            <option value="02" >02</option>
                            <option value="03" >03</option>
                            
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text"><i class="fas fa-chevron-down"></i></div>
                        </div>
                    </div>
                    @error('status_penduduk')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
         
            <div class="form-group">
                <label for="tgl_lahir_penduduk" class="control-label">Tanggal Lahir</label>
                <div class="mt-2">
                    <input type="date" class="form-control" id="tgl_lahir_penduduk" name="tgl_lahir_penduduk" value="{{ old('tgl_lahir_penduduk') }}" required>
                    @error('tgl_lahir_penduduk')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="no_tlp_penduduk" class="control-label">No Telepon</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="no_tlp_penduduk" name="no_tlp_penduduk" value="{{ old('no_tlp_penduduk') }}" required>
                    @error('no_tlp_penduduk')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="alamat" class="control-label">Alamat</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
                    @error('alamat')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="mt-3">
                    <button type="submit" class="btn btn-sm" style="background-color: #1D3752; color: white;">Simpan</button>
                    <a class="btn btn-sm btn-default ml-1" href="{{ url('penduduk') }}">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
@endpush
