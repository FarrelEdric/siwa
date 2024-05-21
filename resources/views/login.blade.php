<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
   form{
    width:500px;
   }

   @media(max-width:728px){
    form{
        width: 300px;
    }
    
   }
   @media(max-width:530px){
    form{
        width: 250px;
    }

    .form{
        padding: 2rem 2rem!important;
        width: 300px
    }
    
   }

</style>
<body style="background-color: #e5e5e5">
    <div class="container">
        {{-- <i class="bi bi-people-fill"></i> --}}
        <div class="form rounded-3" style="position: absolute;left:50%;top:50%;transform: translate(-50%, -50%);background-color:#fff;padding:5rem 5rem;"  >
            <h1 class="text-center fw-bold">Selamat Datang</h1>
            <h1 class="text-center fw-semibold"><span style="color: #3498db" class="fw-bold">SiWa</span></h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="{{route('proses_login')}}"  method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Username</label>
                  <input type="text" name="username" class="form-control  @error('username') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('username')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1">
                </div>
                @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</body>
</html>