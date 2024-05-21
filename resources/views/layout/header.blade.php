<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="	navbar-nav">
    <li class="d-lg-none d-xl-none d-xxl-none d-block  nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <h1 style="font-size: 24px;" class="mr-3  font-main">{{$i[$num]}} {{date('d F Y',strtotime(now()))}}</h1>
      <img class="rounded-circle" src="" alt="">
      <div class="rounded-circle bg-purple ">

      </div>
      <p>{{Auth::user()->username}}</p>
    
  </ul>
</nav>