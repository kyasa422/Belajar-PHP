<?php
require 'funtions.php';

session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

// ambil data dari URL id
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE  id=$id")[0];

if (isset($_POST["submit"])) {




    //cek data apakah berhasil di ubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil di ubah !');
            document.location.href ='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal di ubah !');
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
    <h2>Edit Data Mahasiswa</h2>

    <form action="" method="post" enctype="multipart/form-data" class="form-control form-control-sm">

        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">

        <ul>
            <li class="input-group mb-2 ">
                <label for="nama" class="input-group-text  "> Nama </label>
                <input class="form-control" type="text" name="nama" id="nama" required autocomplete="off" value="<?= $mhs["nama"] ?>">

            </li>
            <li class="input-group mb-2">
                <label for="nrp" class="input-group-text"> NRP</label>
                <input class="form-control" type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"] ?>">
            </li>
            <li class=" input-group mb-2">
                <label for="email" class="input-group-text">Email</label>
                <input class="form-control" type="text" name="email" id="email" required value="<?= $mhs["email"] ?>">
            </li>
            <li class="input-group mb-2">
                <label for="" class="input-group-text">Jurusan</label>
                <input class="form-control" type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
            </li>
            <li class="input-group mb-2">
                <label for="gambar" class="input-group-text">Gambar</label>
                <img src="../pertemuan1/img/<?= $mhs['gambar'] ?>" width="100px" alt="">
                <input class="form-control" type="file" name="gambar" id="gambar">
            </li>
            <button class="btn btn-secondary btn-sm" type="submit" name="submit"> Edit Data</button>
        </ul>

    </form>
</body>

</html>