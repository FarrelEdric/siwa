<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
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

.registrasi-form {
    border: 1px solid #ccc;
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
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #007bff;
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
        <h1>FORMULIR REGISTRASI</h1>
        <div class="registrasi-form">
            <h2>Silahkan Isi Data Berikut</h2>
            <form action="{{route( 'proses_register' )}}" method="post">
               @csrf
                <div class="input-group">
                    <label for="id_produk">Nik Penduduk:</label>
                    <input type="text" id="nik" name="nik" placeholder="Masukkan Nik Penduduk">
                </div>
                <div class="input-group">
                    <label for="level_id">Level ID:</label>
                    <input type="text" id="level_id" name="level_id" placeholder="Masukkan Level ID">
                </div>
                <div class="input-group">
                    <label for="nama_user">Nama Lengkap:</label>
                    <input type="text" id="nama_user" name="nama_user" placeholder="Masukkan Nama Lengkap">
                </div>
                <div class="input-group">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan Username">
                </div>
                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password">
                </div>
                <button type="submit">Daftar</button>
            </form>
        </div>
    </div>
</body>
</html>
