<?php
$db = mysqli_connect("localhost", "root", "", "akademik");

$table_name = "CREATE TABLE IF NOT EXISTS mahasiswa(
    `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT,
    `nama` varchar(50) NOT NULL,
    `nim` char(10) NOT NULL,
    `tugas` int(5) NOT NULL,
    `uts` int(5) NOT NULL,
    `uas` int(5) NOT NULL,
    PRIMARY KEY (`id_mahasiswa`)
    
    
)ENGINE = InnoDB DEFAULT CHARSET = utf8 AUTO_INCREMENT = 1";

$querry = mysqli_query($db, $table_name);

// $querry = mysqli_query($db, "INSERT INTO mahasiswa (`id_mahasiswa`, `nama`, `nim`, `tugas`, `uts`, `uas`)

//          VALUES ('' , 'Agus Setiawan','2107411001', 100, 100, 100),
//                 ('' , 'Nibras','2107411002', 90, 80, 100),
//                 ('' , 'Haikal','2107411003', 50, 50, 50),
//                 ('' , 'Doni','2107411004', 90, 50, 75),
//                 ('' , 'Haical','2107411005', 30, 10, 100);");

function  query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
$mahasiswa = query("SELECT * FROM mahasiswa");




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <table>

        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Tugas</th>
            <th>uts</th>
            <th>uas</th>
            <th>Nilai Akhir</th>

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


            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>