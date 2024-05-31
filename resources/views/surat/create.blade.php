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
                    
                    <div class="col-11">
                        <input type="hidden" class="form-control" id="id_penduduk" name="id_penduduk" value="{{ Auth::user()->id_penduduk }}" required>
                        @error('id_penduduk')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    
                    <div class="col-11">
                        <input type="hidden" class="form-control" id="tgl_surat" name="tgl_surat" value="{{ now()}}" required>
                        @error('id_penduduk')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
              
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Tujuan</label>
                    <div class="col-11">
                        
                        <select  class="form-select" id="tujuan" name="tujuan" value="{{ old('tujuan') }}" required>
                            <option value="Mengurus kartu tanda penduduk">Mengurus kartu tanda penduduk</option>
                            <option value="Mengurus kartu keluarga">Mengurus kartu keluarga</option>
                            <option value="Mengurus SKCK">Mengurus SKCK</option>
                            <option value="Mengurus Akta Kematian">Mengurus Akta Kematian</option>
                            <option value="lainnya">lainnya</option>
                        </select>
                        <input disabled id="text" class="form-control" type="hidden" name="tujuan">
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
    <script>
        $(document).ready(function () {
            $('#tujuan').change(function (){
                console.log('tes')
                if(this.value == 'lainnya'){
                    $('#text').attr('type','text');
                    $('#tujuan').hide();
                    $('#tujuan').attr('disabled', 'disabled');



//remove it
$('#text').removeAttr("disabled")

                }
            })
        })
    </script>
@endpush