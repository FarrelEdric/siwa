<header class="main-header navbar navbar-expand navbar-white navbar-light" style="height: 72px;">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <div style="display: flex; align-items: center; justify-content: center;">
      <p style="margin: 0;">{{$i[$num]}} {{date('d F Y',strtotime(now()))}}</p>
      <span style="margin: 0 10px;">|</span>
      <p style="margin: 0;">Anda login dengan akun <span style="font-weight: bold;">{{Auth::user()->username}}</span></p>
    </div>
  </ul>
</header>
