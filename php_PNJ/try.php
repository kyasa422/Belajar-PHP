<?php

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    echo "$nama";

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama Barang</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga Barang</label></td>
                <td>:</td>
                <td><input type="number" id="harga" name="hargabarang"></td>
            </tr>
            <tr>
                <td><label for="jumlah">Jumlah Barang</label></td>
                <td>:</td>
                <td><input type="number" id="jumlah" name="jumlahbarang"></td>
            </tr>
            <tr>
                <td><label for="diskon">Diskon</label></td>
                <td>:</td>
                <td><input type="checkbox" id="diskon" value="true" name="diskon">dapat diskon 5%</td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>

    </form>
    
</body>

</html>