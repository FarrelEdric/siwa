@extends('layout.template')

@section('content')

@push('css')
<style>
  .overflow::-webkit-scrollbar {
    width: 5px;
  }

  /* Track */
  .overflow::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  /* Handle */
  .overflow::-webkit-scrollbar-thumb {
    background: #888;
  }

  /* Handle on hover */
  .overflow::-webkit-scrollbar-thumb:hover {
    background: #555;
  }
</style>
@endpush


<div style="background-color: #1D3752; color: white;" class="w-100 rounded-2 px-3 py-5">
  <h1 class="text-left">Selamat Datang {{ Auth::user()->username }}</h1>
  <p>Jelajahi RW 06</p>
</div>

<div style="background: white;padding:1rem;" class="mt-5 w-100 px-3">
  <h1>Statistik Penduduk</h1>
  <div style="width: 300px;"><canvas id="acquisitions"></canvas></div>
</div>

<div style="background: white;padding:1rem;" class="mt-5 w-100 px-3">
  <h1 class="mb-5">Statistik Pemasukan Iuran</h1>
  <div style="width: 100%;"><canvas id="line-chart"></canvas></div>
</div>

<h2 style="font-size: 30px;" class="my-3">Pengajuan Surat</h2>
<div class="d-flex flex-wrap justify-content-between w-100">
  @foreach ($surat as $item)
    <div style="width: 100%;" class="card mb-4 rounded overflow p-3 d-flex flex-row align-items-center">
      <div style="width: 50px; height: 40px; background-color: #1D3752;" class="p-1 rounded d-flex justify-content-center align-items-center">
        <h3 style="font-size: 14px; color: white; margin: 0;">New</h3>
      </div>
      <p style="font-size: 16px; margin: 0 0 0 10px;">Surat {{ $item->tujuan }}, status {{ $item->status }}</p>
    </div>
  @endforeach
  
</div>

@endsection

@push('css')
@endpush

@push('js')
<script>
  // console.log(JSON.parse('{{json_encode($penduduk)}}'))
  (async function() {
    const data = {
  labels: [
    'Laki-laki',
    'Perempuan'
  ],
  datasets: [{
    label: 'Jenis Kelamin',
    data: JSON.parse('{{json_encode($penduduk)}}'),
    backgroundColor: [
      '#023e8a',
      '#cdb4db'

    ],
    hoverOffset: 4
  }]
};
const config = {
  type: 'pie',
  data: data,
};
const myChart = new Chart(
   document.getElementById('acquisitions'),
    config
);

// console.log("{{json_encode($keuangan)}}")
console.log(JSON.parse('{{json_encode($pengeluaran)}}'))

var tgl = "{{ json_encode($tanggal) }}"
tgl=tgl.replace(/&quot;/g,'"');
const data1 = {
  labels: JSON.parse(tgl),
  datasets: [{
    type: 'line',
    label: 'Pemasukan',
    data: JSON.parse('{{json_encode($keuangan)}}'),
    borderColor: 'rgb(255, 99, 132)',
    backgroundColor: 'rgba(255, 99, 132, 0.2)'
  }, {
    type: 'line',
    label: 'pengeluaran',
    data: JSON.parse('{{json_encode($pengeluaran)}}'),
    fill: false,
    borderColor: 'rgb(54, 162, 235)',
   
  }]
};
const config1 = {
  type: 'scatter',
  data: data1,
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
};
const myChart1 = new Chart(
   document.getElementById('line-chart'),config1
);
  })()


</script>

@endpush
