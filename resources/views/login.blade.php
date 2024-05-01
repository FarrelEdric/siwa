<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    font-family: sans-serif;
}

.container {
 
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
<body>
    <div class="container">
        <h1>SELAMAT DATANG DI</h1>
        <h1>SISTEM INFORMASI</h1>
        <h1>WARGA DESA</h1>
        <div class="login-form">
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
