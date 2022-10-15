<?php
require '../funtions.php';
$keyword = $_GET["keyword"];

$query =  "SELECT * FROM mahasiswa
    WHERE 
    nama LIKE '%$keyword%' OR
    nrp LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%' LIMIT 10
    ";  
$mahasiswa = query($query);

?>
<table class="table table-striped ">

    <tr>
        <th>NO</th>
        <th>行动</th>
        <th>图片</th>
        <th>NIM</th>
        <th>姓名</th>
        <th>电子邮件</th>
        <th>重大的</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
        <tr>

            <td><?php echo $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>|
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus? ');">hapus</a>
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
        <?php $i++; ?>
    <?php endforeach; ?>
</table>