<?php
require 'functions.php';

$jumlahdataperhalaman = 5;
$jumlahdata = count(query("SELECT * FROM mahasiswa"));
$jumlahlaman = ceil($jumlahdata / $jumlahdataperhalaman);

$pageaktip = (isset($_GET["page"])) ? $_GET["page"] : 1;
$firtsdata =  ($jumlahdataperhalaman * $pageaktip) - $jumlahdataperhalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $firtsdata,$jumlahdataperhalaman");

// if($db === false ){
//     die.(mysqli_connect_error());
// }else{
//     echo"nice";
// }
if (isset($_POST["cari"])) {

    $mahasiswa = cari($_POST["keyword"]);
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
                    <a class="nav-link text-light me-3" href="addData.php">Add Data</a>


                    <form class="d-flex" role="search" action="" method="post">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" autofocus name="keyword">
                        <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
                    </form>




                </div>
            </div>

        </div>
    </nav>









    <div id="container">
        <table class="table table-striped ">

            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Tugas</th>
                <th>uts</th>
                <th>uas</th>
                <th>Nilai Akhir</th>
                <th>Pengaturan</th>

            </tr>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
                <?php $nilaiakhir = $row["tugas"] + $row["uts"] + $row["uas"];
                $result = $nilaiakhir / 3; ?>
                <tr>

                    <td><?php echo $i; ?></td>
                    <td>
                        <?= $row["nama"]; ?>
                    </td>

                    <td>
                        <?= $row["nim"]; ?>
                    </td>
                    <td>
                        <?= $row["tugas"]; ?>
                    </td>
                    <td>
                        <?= $row["uts"]; ?>
                    </td>
                    <td>
                        <?= $row["uas"]; ?>
                    </td>
                    <td>
                        <?= ceil($result); ?>
                    </td>
                    <td>
                        <a href="update.php?id_mahasiswa=<?= $row["id_mahasiswa"]; ?>"><i class="bi bi-pencil-square"></i></a>|
                        <a href="delete.php?id_mahasiswa=<?= $row["id_mahasiswa"]; ?>;"><i class="bi bi-trash-fill"></i></a>
                    </td>


                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>

    </div>
    <?php for ($i = 1; $i <= $jumlahlaman; $i++) : ?>
        <a href="?page=<?= $i ?>" class="ms-4"> <?= $i; ?></a>
    <?php endfor; ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>