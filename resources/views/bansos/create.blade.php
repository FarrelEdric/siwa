@extends('layout.template')

@section('content')
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">Tambah Penerima Bansos</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('bansos.store') }}" class="form-horizontal">
            @csrf
            <div class="form-group">
                <label for="nama_penerima" class="control-label">Nama Penerima</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" value="{{ old('nama_penerima') }}" required>
                    @error('nama_penerima')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="c1" class="control-label">Tidak menerima PKH/BPNT</label>
                <div class="input-group mt-2">
                    <select class="form-control" id="c1" name="c1" required>
                        <option value="">-- Pilih --</option>
                        <option value="4">Tidak Menerima</option>
                        <option value="2">Menerima</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    @error('c1')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="c2" class="control-label">Kepemilikan Aset</label>
                <div class="input-group mt-2">
                    <select class="form-control" id="c2" name="c2" required>
                        <option value="">-- Pilih --</option>
                        <option value="4">Tidak Memilik Aset</option>
                        <option value="2">Memiliki Aset Produktif</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    @error('c2')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="c3" class="control-label">Kependudukan</label>
                <div class="input-group mt-2">
                    <select class="form-control" id="c3" name="c3" required>
                        <option value="">-- Pilih --</option>
                        <option value="5">Warga Asli</option>
                        <option value="4">Pindahan</option>
                        <option value="3">Penduduk Tidak Menetap</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    @error('c3')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="c4" class="control-label">Jumlah Anggota Keluarga</label>
                <div class="input-group mt-2">
                    <select class="form-control" id="c4" name="c4" required>
                        <option value="">-- Pilih --</option>
                        <option value="5">> 6</option>
                        <option value="3">3 - 6</option>
                        <option value="1"><= 3</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    @error('c4')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="c5" class="control-label">Penghasilan</label>
                <div class="input-group mt-2">
                    <select class="form-control" id="c5" name="c5" required>
                        <option value="">-- Pilih --</option>
                        <option value="4">< 800.000</option>
                        <option value="3">800.000 - 1.500.000</option>
                        <option value="2">1.500.000 - 2.000.000</option>
                        <option value="1">> 2.000.000</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    @error('c5')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="c6" class="control-label">Jenis Pekerjaan</label>
                <div class="input-group mt-2">
                    <select class="form-control" id="c6" name="c6" required>
                        <option value="">-- Pilih --</option>
                        <option value="4">Tidak Tetap</option>
                        <option value="2">Tetap</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    @error('c6')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="c7" class="control-label">Keadaan Anggota Keluarga</label>
                <div class="input-group mt-2">
                    <select class="form-control" id="c7" name="c7" required>
                        <option value="">-- Pilih --</option>
                        <option value="3">Ada > 2</option>
                        <option value="2">Ada</option>
                        <option value="1">Tidak Ada</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    @error('c7')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="c8" class="control-label">Jumlah Anak Sekolah</label>
                <div class="input-group mt-2">
                    <select class="form-control" id="c8" name="c8" required>
                        <option value="">-- Pilih --</option>
                        <option value="4">> 3</option>
                        <option value="2"><= 3</option>
                    </select>
                    <div class="input-group-append">
                        <div class="input-group-text"><i class="fas fa-chevron-down"></i></div>
                    </div>
                    @error('c8')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="mt-3">
                    <button type="submit" class="btn btn-sm" style="background-color: #1D3752; color: white;">Simpan</button>
                    <a class="btn btn-sm btn-default ml-1" href="{{ route('bansos.index') }}">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
