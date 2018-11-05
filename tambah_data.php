<?php
    require 'functions.php';
    //cek apakah button submit di tekan atau belum
    if(isset($_POST['submit']))
    {
        //cek sukses data ditambah menggunakan function tambah pada functions.php
        if(tambah($_POST)>0)
        {
            echo"
            <script>
                alert('data berhasil disimpan');
                document.location.href='index.php';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('data gagal disimpan');
                document.location.href='tambah_data.php';
                </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Halaman Utama</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tambah_data.php">Tambah Data</a>
        </li>
    </ul>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama" required>
            </li>
            <li>
                <label for="Nim">Nim</label>
                <input type="text" name="Nim" id="Nim" required>
            </li>
            <li>
                <label for="Email">Email</label>
                <input type="text" name="Email" id="Email" required>
            </li>
            <li>
                <label for="Jurusan">Jurusan</label>
                <input type="text" name="Jurusan" id="Jurusan" required>
            </li>
            <li>
                <label for="Gambar">Gambar</label>
                <input type="text" name="Gambar" id="Gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>
</html>