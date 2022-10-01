<?php 
require 'funtions.php';

// ambil data dari URL id
$id=$_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE  id=$id")[0];
  
if( isset($_POST["submit"])){
 



    //cek data apakah berhasil di ubah atau tidak
     if( ubah($_POST)>0){
        echo"
        <script>
            alert('data berhasil di ubah !');
            document.location.href ='index.php';
        </script>
        ";

     }else{
         echo"
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
    <title>Tambah Data</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <ul>
            <li>
                <label for="nama"> Nama </label>
                <input type="text" name="nama" id="nama" required 
                value="<?= $mhs["nama"] ?>" >
                
            </li>
            <li>
                <label for="nrp"> NRP</label>
                <input type="text" name="nrp" id="nrp" required
                value="<?= $mhs["nrp"] ?>">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" required
                value="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for="">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required
                value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" id="gambar" required
                value="<?= $mhs["gambar"] ?>">
            </li>
            <li> <button type="submit" name="submit"> Edit Data</button></li>
        </ul>

    </form>
</body>
</html>