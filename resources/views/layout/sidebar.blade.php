<div class="sidebar">
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="{{ url('/') }}" class="nav-link {{ ($activeMenu == 'dashboard') ? 'active' : '' }}" style="color: white;">
          <i class="nav-icon fas fa-home"></i>
          <p>Dashboard</p>
        </a>
      </li>

      <li class="nav-item ">
        <a href="#" class="nav-link" style="color: white;">
          <i class="nav-icon far fa-envelope"></i>
          <p>
            Persuratan
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('/surat')}}" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Kelola Persuratan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./index2.html" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>History Persuratan</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="{{url('/keuangan')}}" class="nav-link " style="color: white;">
          <i class="nav-icon fas fa-coins"></i>
          <p>
            Keuangan
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('/keuangan')}}" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Data Keuangan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./index2.html" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Rekap Keuangan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./index2.html" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Form Iuran</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link " style="color: white;">
          <i class="nav-icon fas fa-info-circle"></i>
          <p>
            Informasi
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="./index.html" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Kegiatan Warga</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./index2.html" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Sosialiasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./index2.html" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Struktur Organisasi</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link " style="color: white;">
          <i class="nav-icon fas fa-list-ul"></i>
          <p>
            Data Warga
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('/penduduk')}} " class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Data Seluruh Warga</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./index2.html" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>History Keluar Masuk</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link " style="color: white;">
          <i class="nav-icon fas fa-hands-helping"></i>
          <p>
            Bantuan Sosial
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>List Penerima</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/bantuanSosial')}}" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Informasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./index2.html" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Pengajuan</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a href="{{ url('/user') }}" class="nav-link {{ ($activeMenu == 'user') ? 'active' : '' }}" style="color: white;">
          <i class="nav-icon far fa-user"></i>
          <p>Data User</p>
        </a>
      </li>

    </ul>
  </nav>
</div>
