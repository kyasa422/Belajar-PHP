<?php
    $db_host = 'localhost'; //Nama Server
    $db_user = 'root'; //User Server
    $db_pass = ''; //Password Server
    $db_name = 'latihan'; //Nama Databases

    //simpan koneksi kedalam variabel $conn
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    //mengetes apakah koneksi gagal atau berhasil
    if (!$conn) {
        die ('Gagal terhubung MySQL: ' . mysqli_connect_error());
    } 
    else {
        echo "Terkoneksi ke MySQL ! <br>";
    }
    
    $table_name = 'sales';

    $sql = "CREATE TABLE IF NOT EXISTS $table_name(
                `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
                `id_produk` int(11) NOT NULL,
                `tgl_transaksi` date NOT NULL,
                `kuantitas` tinyint(4) NOT NULL,
                `harga` int(11) NOT NULL,
                `id_pelanggan` int(11) NOT NULL,
                PRIMARY KEY (`id_transaksi`),
                KEY `id_produk` (`id_produk`)
            )   ENGINE = InnoDB DEFAULT CHARSET = utf8 AUTO_INCREMENT = 1";

    $querry = mysqli_query($conn, $sql);

    if (!$querry) {
        die ('ERROR: Tabel ' . $table_name . ' gagal dibuat : ' . mysqli_error($conn));
    }
    echo 'Tabel ' . $table_name . ' berhasil dibuat <br/>';

    // $sql = "INSERT INTO `$table_name` (`id_transaksi`, `id_produk`, `tgl_transaksi`, `kuantitas`, `harga`, `id_pelanggan`)
    // /* id_transaksi kosong karna auto increment */
    //         VALUES ('' , 100, '2016-09-20', 8, 265000, 1),
    //                 ('', 100, '2016-09-20', 3, 270000, 2),
    //                 ('', 100, '2016-09-20', 8, 250000, 2),
    //                 ('', 100, '2016-09-20', 12, 380000, 2 ),
    //                 ('', 100, '2016-09-20', 12, 250000, 1)";
                    
    // $querry = mysqli_query($conn, $sql);
    
    if (!$querry) {
        die ('ERROR : Data gagal dimasukan pada tabel ' . $table_name . ': ' . mysqli_error($conn));
    }
    echo 'Data berhasil dimasukan pada tabel ' . $table_name . '';
    
    $sql = "SELECT id_produk, tgl_transaksi, harga, kuantitas
            FROM sales";
    
    $querry = mysqli_query($conn, $sql);

    if (!$querry) {
        die ("SQL ERROR : " . mysqli_error($conn));
    }
    
    $produk= mysqli_fetch_array($querry);
?> 

    <html lang="en">
            <head>
                <title>sales</title>
            </head>
            <body>
                <table>
                    <thead>
                        <tr>
                            <th>ID PRODUK</th>
                            <th>TGL TRANSAKSI</th>
                            <th>HARGA</th>  
                            <th>KUANTITAS</th>
                        </tr>
                    </thead>
                </table>
            </body>
            </html>
    
    <?php foreach ($produk as $row) : ?>
    <tr>
                <td> <?= $row['id_produk']; ?> </td>
    </tr>
    
    <?php endforeach; ?>