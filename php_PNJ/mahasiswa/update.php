<?php
require 'functions.php';
// ambil data dari URL id
$id = $_GET["id_mahasiswa"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE  id_mahasiswa=$id")[0];

if (isset($_POST["submit"])) {




    //cek data apakah berhasil di ubah atau tidak
    if (update($_POST) > 0) {
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

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>update data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php ">
                <h3 class="text-light me-3 ms-5">Mahasiswa</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-light me-3" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link text-light me-3" href="tambah.php">Add Data</a>




                </div>
            </div>
        </div>
    </nav>



    <form action="" method="post" enctype="multipart/form-data" class="form-control form-control-sm">

        <input type="hidden" name="id_mahasiswa" value="<?= $mhs["id_mahasiswa"]; ?>">
        <ul>
            <li class="input-group mb-2 ">
                <label for="nama" class="input-group-text  "> Nama </label>
                <input type="text" name="nama" id="nama" required class="form-control" value="<?= $mhs["nama"] ?>">
            </li>
            <li class="input-group mb-2">
                <label for="nim" class="input-group-text"> Nim</label>
                <input type="text" name="nim" id="nim" required class="form-control" value="<?= $mhs["nim"] ?>">
            </li>
            <li class=" input-group mb-2">
                <label for="tugas" class="input-group-text">Tugas</label>
                <input type="number" name="tugas" id="tugas" required class="form-control" value="<?= $mhs["tugas"] ?>">
            </li>
            <li class="input-group mb-2">
                <label for="uts" class="input-group-text">Uts</label>
                <input type="number" name="uts" id="uts" required class="form-control" value="<?= $mhs["uts"] ?>">
            </li>
            <li class="input-group mb-2">
                <label for="uas" class="input-group-text">Uas</label>
                <input type="number" name="uas" id="uas" required class="form-control" value="<?= $mhs["uas"] ?>">
            </li>
            <button type="submit" name="submit" class="btn btn-secondary btn-sm"> Update Data</button>
        </ul>

    </form>








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>