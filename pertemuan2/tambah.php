<?php
require 'funtions.php';
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["submit"])) {





    //cek data apakah berhasil atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil di tambahkan !');
            document.location.href ='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal di tambahkan !');
            document.location.href ='index.php';
        </script>
        ";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- //bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Tambah Data</title>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled">Disabled</a>
      </div>
    </div>
  </div>
</nav>
    <h2>Tambah Data Mahasiswa</h2>

    <form action="" method="post" enctype="multipart/form-data" class="form-control form-control-sm">
        <ul>
            <li class="input-group mb-2 ">
                <label for="nama" class="input-group-text  "> Nama </label>
                <input type="text" name="nama" id="nama" required class="form-control">
            </li>
            <li class="input-group mb-2">
                <label for="nrp" class="input-group-text"> NRP</label>
                <input type="text" name="nrp" id="nrp" required class="form-control">
            </li>
            <li class=" input-group mb-2">
                <label for="email" class="input-group-text">Email</label>
                <input type="text" name="email" id="email" required class="form-control">
            </li>
            <li class="input-group mb-2">
                <label for="" class="input-group-text">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required class="form-control">
            </li>
            <li class="input-group mb-2">
                <label for="gambar" class="input-group-text">Gambar</label>
                <input type="file" name="gambar" id="gambar" required class="form-control">
            </li>
            <button type="submit" name="submit" class="btn btn-secondary btn-sm"> Tambah Data</button>
        </ul>

    </form>
</body>

</html>