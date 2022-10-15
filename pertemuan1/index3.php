<?php 
// Koneksi ke database
  $db = mysqli_connect("localhost","root", "", "phpdasar");

  // Ambil data dari mahasisawa

  $result = mysqli_query($db, "SELECT * FROM mahasiswa");

    // ambil data ( fetch ) mahasiswa dari object resul
    // mysqli_fetch_row() mengembalikan array numeric
    // mysqli_fetch_assoc() Mengembalikan array associative
    // mysqli_fetch_array() mengembalikan keduanya 
    // mysqli_fetch_object() mengembalikan object

    //   while ($mhs = mysqli_fetch_assoc($result)){
    //   var_dump($mhs);
    //   }
    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
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

    <a href="tambah.php">Tambah Mahasiswa</a>

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
    <?php while( $row = mysqli_fetch_assoc($result)) :?>
    <tr>
        
        <td><?php echo $i;?></td>
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


    </tr>
    <?php $i++;?>
    <?php endwhile; ?>
    </table>
    
</body>
</html>