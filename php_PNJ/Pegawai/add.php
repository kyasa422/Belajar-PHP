<?php 
require 'function.php';
if (isset($_POST["submit"])) {
    //cek data apakah berhasil atau tidak
    if (tambah($_post) > 0) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid mx-5">
    <a class="navbar-brand" href="#">PNJ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add.php">Add Data</a>
        </li>
       

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<form  action="" method="post"class="mt-5 mx-5" >
  <fieldset >
    <legend>Tambah Data Pegawai</legend>
    <div class="mb-3">
      <label for="" class="form-label">Nama </label>
      <input type="text" id="" class="form-control" placeholder="" name="nama">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Alamat </label>
      <input type="text" id="" class="form-control" placeholder="" name="alamat">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Salary </label>
      <input type="number" id="" class="form-control" placeholder="" name="salary">
    </div>
    
    
    <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
    <button type="submit" class="btn btn-primary">Cancel</button>
  </fieldset>
</form>




</body>
</html>