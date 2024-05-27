<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</head>
<style>
  .height {
    height: 120vh;
  }

  .height-100 {
    height: 100%;
  }
</style>

<script>
  $(document).ready(function () {
    $(".container").printThis();
  });
</script>

<body>


  <div class="container height">
    <header>
      <div class="d-flex p-3 align-items-center">
        <div class="logo-polinema">

        </div>
        <div class="text text-center">
          <h1 class="fw-normal fs-4">
            KEMENTERIAN PENDIDIKAN,KEBUDAYAAN, <br />RISET,DAN TEKNOLOGI
          </h1>
          <h1 class="fw-normal fs-4">WARGA ........</h1>
          <h1 class="fs-4">LT/HMJ/UKM</h1>
          <p>
            Jl. Soekarno Hatta No.9 Jatimulyo, Lowokwaru, Malang, 65141 Telp.
            (0341) 404424 – 404425, Fax (0341) 404420,
           
          </p>
        </div>
        <div class="logo-JTI">

        </div>
      </div>
      <hr />
    </header>
    <div class="d-flex height-100 flex-column justify-content-between">
      <div class="top">
        <div class="d-flex justify-content-between">
          <table>
            <tr>
              <td>Nomor</td>
              <td>:</td>
            </tr>

            <tr>
              <td>Lampiran</td>
              <td>:</td>
              <td>1 (satu) Lembar</td>
            </tr>

            <tr>
              <td>Hal</td>
              <td>:</td>
              <td>Peminjaman Ruang JTI</td>
            </tr>
          </table>
          <p>
            <?= date("Y-m-d") ?>
          </p>
        </div>
        <p class="mt-5">
          Dengan ini, kami ingin memberikan bukti bahwa Jurusan Teknologi
          Informasi telah resmi meminjam Ruang
         
          acara
  
        </p>
        <p class="m-0">Kegiatan tersebut akan diselenggarakan pada :</p>
        <table class="ms-5 m-0">
          <tr>
            <td>hari,tanggal</td>
            <td>:</td>
            <td>
             
            </td>
          </tr>
          <tr>
            <td>pukul</td>
            <td>:</td>
          </tr>
        </table>
        <p style="text-align: justify" class="mt-5 align-">
          Permintaan ini telah disetujui dan dikonfirmasi oleh pihak
          berwenang, dan semua persyaratan terkait peminjaman ruang telah
          dipenuhi sesuai dengan prosedur yang berlaku. Semua pihak yang
          terlibat dalam acara ini telah diberikan informasi mengenai aturan
          dan tata tertib penggunaan ruang. Demikian surat bukti peminjaman
          ini kami buat, atas izin dan bantuan yang diberikan kami sampaikan
          terima kasih.
        </p>
      </div>
      <div class="bottom">
        <div class="d-flex justify-content-between">
          <div class="admin-jurusan">
            <br />
            <p>Admin Jurusan,</p>
            <p class="mt-5 m-0">(Admin)</p>
            <p>NIP.(NIP Admin)</p>
          </div>
          <div class="penangggung-jawab">
            <p class="m-0">Hormat kami,</p>
            <p class="m-0">Penanggungjawab Peminjaman</p>
            <p class="mt-5 m-0">
             
            </p>
            <p>NIM/NIK.()</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>