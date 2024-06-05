@extends('layout.template')

@section('content')
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">Tambah Rekap Keuangan</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('keuangan') }}" class="form-horizontal">
            @csrf
            <div class="form-group">
                <label for="date" class="control-label">Tanggal</label>
                <div class="mt-2">
                    <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" required>
                    @error('date')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan" class="control-label">Keterangan</label>
                <div class="mt-2">
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ old('keterangan') }}" maxlength="200">
                    @error('keterangan')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="jenis_transaksi" class="control-label">Jenis Transaksi</label>
                <div class="mt-2">
                    <div class="input-group">
                        <select class="form-control" id="jenis_transaksi" name="jenis_transaksi" required>
                            <option value="">- Pilih Jenis -</option>
                            <option value="pemasukan">Pemasukan</option>
                            <option value="pengeluaran">Pengeluaran</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text"><i class="fas fa-chevron-down"></i></div>
                        </div>
                    </div>
                    @error('jenis_transaksi')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="nominal" class="control-label">Nominal</label>
                <div class="mt-2">
                    <input type="number" class="form-control" id="nominal" name="nominal" value="{{ old('nominal') }}" required>
                    @error('nominal')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="mt-3">
                    <button type="submit" class="btn btn-sm" style="background-color: #1D3752; color: white;">Simpan</button>
                    <a class="btn btn-sm btn-default ml-1" href="{{ url('keuangan') }}">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
@endpush