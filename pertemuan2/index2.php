<?php 
    require 'funtions.php';

  $mahasiswa = query("SELECT * FROM mahasiswa")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="tambah.php">Tambah Data</a>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>NO.1</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i=1; ?>
    <?php foreach($mahasiswa as $row) :?>
    <tr>
        
        <td><?php echo $i;?></td>
        <td>
            <a href="">ubah</a>|
          <a href="hapus.php?id=<?= $row["id"]; ?>" >hapus</a>
        </td>
        <td><img src="../pertemuan1/img/<?php echo $row["gambar"]; ?>" width="50px"></td>
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


    </tr>
    <?php $i++;?>
    <?php endforeach; ?>
    </table>
    
</body>
</html>