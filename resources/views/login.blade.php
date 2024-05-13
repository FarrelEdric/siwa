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
    body {
    font-family: sans-serif;
}

.container {
    /* background-color: #0056b3; */
    /* color: yellow; */
    width: 400px;
    margin: 0 auto;
    text-align: center;
}

h1 {
    font-size: 24px;
    margin-top: 20px;
    margin-bottom: 10px;
}

.login-form {
    border: 1px solid #1d3752;
    padding: 20px;
    margin-top: 20px;
}

h2 {
    font-size: 18px;
    margin-bottom: 10px;
}

.input-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #1d3752;
    box-sizing: border-box;
}

button {
    background-color: #1d3752;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

</style>
<body style="background-color: #1d3752">
    <div class="container">
        {{-- <i class="bi bi-people-fill"></i> --}}
        <div class="text-warning" style="margin-top:100px;">
            <h1 class="fw-bold">SELAMAT DATANG DI</h1>
            <h1 class="fw-bold">SISTEM INFORMASI</h1>
            <h1 class="fw-bold">WARGA DESA</h1>
        </div>
        <div class="login-form" style="background-color: #D9D9D9;  margin-top:100px;">
            <h2>SILAHKAN LOGIN</h2>
            <form action="{{route('proses_login')}}" method="POST">
                @csrf
                @method('POST')
                <div class="input-group">
                    <label for="username">Masukkan Username:</label>
                    <input type="text" id="username" name="username" placeholder="Username">
                </div>
                <div class="input-group">
                    <label for="password">Masukkan Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <button type="submit">Login</button>
                <a href="{{route('register')}}">Register</a>
            </form>
        </div>
    </div>
</body>
</html>
