<div class="sidebar ">
  <div class="d-flex align-items-center mt-3">
    <a href="{{ url('/dashboard') }}" class="brand-link p-0" style="display: flex; align-items: center;">
      <img src="{{ asset('adminlte/dist/img/SiwaLogo.png') }}" alt="AdminLTE Logo" class="brand-image img-rectangle" >
      <span class="brand-text" style="color: #ffffff; font-family: 'Righteous', sans-serif; font-size: 25px; margin-left: 5px;">SiWA</span>
    </a>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2 h-100">
    <hr class="bg-white">
    <ul class="nav nav-pills nav-sidebar  h-100 flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item mt-2">
        <a href="{{ url('/dashboard') }}" class="nav-link {{ ($activeMenu == 'dashboard') ? 'active' : '' }}" style="color: white;">
          <i class="nav-icon fas fa-home"></i>
          <p>Dashboard</p>
        </a>
      </li>

      <li class="{{Auth::user()->level_id == '3' ? 'd-none':''}} nav-item mt-2">
        <a href="#"  class="nav-link {{ ($activeMenu == 'surat') ? 'active' : '' }}" style="color: white;">
          <i class="nav-icon far fa-envelope"></i>
          <p>
            Persuratan
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{Auth::user()->level_id == '2'? url('/surat'):url('admin/surat')}}" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Kelola Persuratan</p>
            </a>
          </li>
          
        </ul>
      </li>

      <li class="nav-item mt-2">
        <a href="{{url('/keuangan')}}" class="nav-link {{ ($activeMenu == 'keuangan') ? 'active' : '' }}" style="color: white;">
          <i class="nav-icon fas fa-coins"></i>
          <p>
            Keuangan
            
          </p>
        </a>
        
        
      </li>

      <li class="nav-item mt-2">
        <a href="#" class="nav-link {{ ($activeMenu == 'kegiatan') ? 'active' : '' }}" style="color: white;">
          <i class="nav-icon fas fa-info-circle"></i>
          <p>
            Informasi
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="./kegiatan" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Kegiatan Warga</p>
            </a>
          </li>
          <li class="nav-item mt-2">
            <a href="{{url('/sosialisasi')}}" class="nav-link" style="color: black;">
              <i class="nav-icon fas"></i>
              <p>Sosialiasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/organisasi')}}" class="nav-link" style="color: black;">
              <i style="color: black;" class="nav-icon fas"></i>
              <p>Struktur Organisasi</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item mt-2 {{Auth::user()->isAdmin() ? '':'d-none'}}" >
        <a href="{{url('/penduduk')}}" class="nav-link {{ ($activeMenu == 'penduduk') ? 'active' : '' }}" style="color: white;">
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

      <li class="{{Auth::user()->level_id == '3' ? 'd-none':''}} nav-item mt-2 {{Auth::user()->isAdmin() ? '':'d-none'}}" >
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
              <p>Data Faktor</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/bantuanSosial')}}" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Kriteria</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./index2.html" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Alternatif</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./index2.html" class="nav-link" style="color: white;">
              <i class="nav-icon fas"></i>
              <p>Alternatif</p>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item {{ Auth::user()->isAdmin() ? '' : 'd-none' }}">
        <a href="{{ url('/user') }}" class="nav-link {{ $activeMenu == 'user' ? 'active' : '' }}" style="color: white;">
            <!-- Isi dari tautan bisa ditempatkan di sini -->
        </a>
    </li>
    <hr class="bg-white">
    <!-- Tombol Logout -->
    <li class="nav-item">
        <a href="{{ url('/logout') }}" class="nav-link align-self-end" style="color: white;">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
        </a>
    </li>    
    </ul>
  </nav>
</div>