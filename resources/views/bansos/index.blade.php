@extends('layout.template')

@section('content')
<div class="card card-outline">
    <div class="card-header">
        <h3 class="card-title">Daftar Penerima Bansos</h3>
        <div class="card-tools">
            <a class="btn btn-sm mt-1" href="{{ route('bansos.create') }}" style="background-color: #1D3752; color: white;">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <table class="table table-bordered table-striped table-hover table-sm" id="table_bansos">
            <thead>
                <tr>
                    <th>Nama Penerima</th>
                    <th>Tidak menerima PKH/BPNT</th>
                    <th>Kepemilikan Aset</th>
                    <th>Kependudukan</th>
                    <th>Jumlah Anggota Keluarga</th>
                    <th>Penghasilan</th>
                    <th>Jenis Pekerjaan</th>
                    <th>Anggota Keluarga Lansia/Disabilitas</th>
                    <th>Jumlah Anak Sekolah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<div class="card card-outline mt-4">
    <div class="card-header">
        <h3 class="card-title">Pemetaan GAP</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-sm" id="table_profile_matching">
            <thead>
                <tr>
                    <th class="text-center">Nama Penerima</th>
                    <th class="text-center">C1</th>
                    <th class="text-center">C2</th>
                    <th class="text-center">C3</th>
                    <th class="text-center">C4</th>
                    <th class="text-center">C5</th>
                    <th class="text-center">C6</th>
                    <th class="text-center">C7</th>
                    <th class="text-center">C8</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemetaanGAP as $result)
                    <tr>
                        <td>{{ $result['nama_penerima'] }}</td>
                        <td class="text-center">{{ $result['c1'] }}</td>
                        <td class="text-center">{{ $result['c2'] }}</td>
                        <td class="text-center">{{ $result['c3'] }}</td>
                        <td class="text-center">{{ $result['c4'] }}</td>
                        <td class="text-center">{{ $result['c5'] }}</td>
                        <td class="text-center">{{ $result['c6'] }}</td>
                        <td class="text-center">{{ $result['c7'] }}</td>
                        <td class="text-center">{{ $result['c8'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card card-outline mt-4">
    <div class="card-header">
        <h3 class="card-title">Pembobotan Dengan Tabel GAP</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-sm" id="table_bobot_nilai_gap">
            <thead>
                <tr>
                    <th class="text-center">Nama Penerima</th>
                    <th class="text-center">C1</th>
                    <th class="text-center">C2</th>
                    <th class="text-center">C3</th>
                    <th class="text-center">C4</th>
                    <th class="text-center">C5</th>
                    <th class="text-center">C6</th>
                    <th class="text-center">C7</th>
                    <th class="text-center">C8</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bobotNilaiGAP as $gap)
                    <tr>
                        <td>{{ $gap['nama_penerima'] }}</td>
                        <td class="text-center">{{ $gap['c1'] }}</td>
                        <td class="text-center">{{ $gap['c2'] }}</td>
                        <td class="text-center">{{ $gap['c3'] }}</td>
                        <td class="text-center">{{ $gap['c4'] }}</td>
                        <td class="text-center">{{ $gap['c5'] }}</td>
                        <td class="text-center">{{ $gap['c6'] }}</td>
                        <td class="text-center">{{ $gap['c7'] }}</td>
                        <td class="text-center">{{ $gap['c8'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card card-outline mt-4">
    <div class="card-header">
        <h3 class="card-title">Penentuan CF dan SF</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-sm" id="table_cf_sf">
            <thead>
                <tr>
                    <th class="text-center" rowspan="2">Nama Penerima</th>
                    <th colspan="5" class="text-center">Core Factors</th>
                    <th colspan="3" class="text-center">Secondary Factors</th>
                </tr>
                <tr>
                    <th class="text-center">C1</th>
                    <th class="text-center">C2</th>
                    <th class="text-center">C4</th>
                    <th class="text-center">C5</th>
                    <th class="text-center">C6</th>
                    <th class="text-center">C3</th>
                    <th class="text-center">C7</th>
                    <th class="text-center">C8</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cfAndSf as $result)
                    <tr>
                        <td>{{ $result['nama_penerima'] }}</td>
                        @foreach ($result['core_factors'] as $cf)
                            <td class="text-center">{{ $cf }}</td>
                        @endforeach
                        @foreach ($result['secondary_factors'] as $sf)
                            <td class="text-center">{{ $sf }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card card-outline mt-4">
    <div class="card-header">
        <h3 class="card-title">Perhitungan CF dan SF</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th class="text-center">Nama Penerima</th>
                    <th class="text-center">NCF</th>
                    <th class="text-center">NSF</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ncfAndNsf as $result)
                    <tr>
                        <td>{{ $result['nama_penerima'] }}</td>
                        <td class="text-center">{{ number_format($result['ncf'], 2) }}</td>
                        <td class="text-center">{{ number_format($result['nsf'], 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card card-outline mt-4">
    <div class="card-header">
        <h3 class="card-title">Perhitungan Nilai Total</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th class="text-center">Nama Penerima</th>
                    <th class="text-center">Nilai Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilaiTotal as $result)
                    <tr>
                        <td>{{ $result['nama_penerima'] }}</td>
                        <td class="text-center">{{ $result['nilai_total'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card card-outline mt-4">
    <div class="card-header">
        <h3 class="card-title">Hasil Perankingan</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th class="text-center">Nama Penerima</th>
                    <th class="text-center">Nilai Total</th>
                    <th class="text-center">Ranking</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($perankingan as $result)
                    <tr>
                        <td>{{ $result['nama_penerima'] }}</td>
                        <td class="text-center">{{ $result['nilai_total'] }}</td>
                        <td class="text-center">{{ $result['ranking'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

@push('css')
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            $('#table_bansos').DataTable({
                serverSide: true,
                ajax: {
                    "url": "{{ route('bansos.list') }}",
                    "dataType": "json",
                    "type": "POST"
                },
                columns: [
                    { data: "nama_penerima", className: "text-center", orderable: true, searchable: true },
                    { data: "c1", className: "text-center", orderable: true, searchable: true },
                    { data: "c2", className: "text-center", orderable: true, searchable: true },
                    { data: "c3", className: "text-center", orderable: true, searchable: true },
                    { data: "c4", className: "text-center", orderable: true, searchable: true },
                    { data: "c5", className: "text-center", orderable: true, searchable: true },
                    { data: "c6", className: "text-center", orderable: true, searchable: true },
                    { data: "c7", className: "text-center", orderable: true, searchable: true },
                    { data: "c8", className: "text-center", orderable: true, searchable: true },
                    { data: "aksi", className: "text-center", orderable: false, searchable: false }
                ]
            });
        });
    </script>
@endpush
