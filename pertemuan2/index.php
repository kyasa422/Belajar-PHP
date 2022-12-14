<?php
require 'funtions.php';

$jumlahdataperhalaman = 10;
$jumlahdata = count(query("SELECT * FROM mahasiswa"));
$jumlahlaman = ceil($jumlahdata / $jumlahdataperhalaman);

$pageaktip = (isset($_GET["page"])) ? $_GET["page"] : 1;
$firtsdata =  ($jumlahdataperhalaman * $pageaktip) - $jumlahdataperhalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $firtsdata,$jumlahdataperhalaman");


session_start();
if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

//jika tombol cari di tekan
if (isset($_POST["cari"])) {

  $mahasiswa = cari($_POST["keyword"]);
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
  <title>Halaman Admins</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php ">
        <h3 class="text-light me-3 ms-5">学生名单</h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active text-light me-3" aria-current="page" href="index.php">Home</a>
          <a class="nav-link text-light me-3" href="tambah.php">Add Data</a>
          <a class="nav-link text-light me-3" href="ViewChart.php">ViewChart</a>
          <a class="nav-link text-light me-3" href="logout.php">Logout</a>

          <!-- Pencarian -->
          <form class="d-flex ms-5 " role="search" action="" method="POST">
            <input class="form-control me-3 pe-5 ps-3" type="search" aria-label="Search" name="keyword" placeholder="输入搜索关键字" autocomplete="off" id="keyword">
            <button class="btn btn-outline-success text-light " type="submit" name="cari" id="tombol-cari">Search</button>
           
          </form>

        </div>
      </div>
    </div>
  </nav>




  <br>
  <?php for ($i = 1; $i <= $jumlahlaman; $i++) : ?>
    <a href="?page=<?= $i ?>"> <?= $i; ?></a>
  <?php endfor; ?>

  <div id="container">
    <table class="table table-striped ">

      <tr>
        <th>NO</th>
        <th>行动</th>
        <th>图片</th>
        <th>NIM</th>
        <th>姓名</th>
        <th>电子邮件</th>
        <th>重大的</th>
        <th>分数</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach ($mahasiswa as $row) : ?>
        <tr>

          <td><?php echo $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>|
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus? ');">hapus</a>
          </td>
          <td><img src="img/<?php echo $row["gambar"]; ?>" width="50px"></td>
          <td>
            <?= $row["nrp"]; ?>
          </td>
          <td>
            <?= $row["nama"]; ?>
          </td>
          <td>
            <?= $row["email"]; ?>
          </td>
          <td>
            <?= $row["jurusan"]; ?>
          </td>
          <td>
            <?= $row["nilaiuas"]; ?>
          </td>


        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.1.js" ></script>

  <script src="JS/script.js"></script>
</body>

</html>