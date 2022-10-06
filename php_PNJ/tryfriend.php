<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi_Kasir</title>
</head>

<body>


    <fieldset>
        <legend>Aplikasi Kasir</legend>
        <form action="" method="POST">

            <table>
                <tr>
                    <td><label for="nama">Nama Barang</label></td>
                    <td>:</td>
                    <td><input type="text" id="nama" name="namabarang"></td>
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
                    <td><input type="checkbox" id="diskon" value="true"  name="diskon">dapat diskon 5%</td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </fieldset>

    <?php
    
    if (isset($_POST['submit'])) : ?>
        <?php
        $namabarang = $_POST['namabarang'];
        $hargabarang = $_POST['hargabarang'];
        $jumlahbarang = $_POST['jumlahbarang'];
        if(isset ($_POST['diskon'])){
            
          
                $total = $hargabarang * $jumlahbarang;
                $diskon = $total * 0.05;
                $total = $total - $diskon;
                
        
        } else {
            $total = $hargabarang * $jumlahbarang;
        }
        ?>
        <fieldset>
            <legend>Hasil</legend>

            <table>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td> <?php echo $namabarang; ?> </td>
                </tr>
                <tr>
                    <td>Harga Barang</td>
                    <td>:</td>
                    <td> <?php echo $hargabarang; ?> </td>
                </tr>
                <tr>
                    <td>Jumlah Barang</td>
                    <td>:</td>
                    <td> <?php echo $jumlahbarang; ?> </td>
                </tr>
                <tr>
                    <td>Diskon</td>
                    <td>:</td>
                    <td> <?php global $diskon; echo $diskon ? "5%" : "0%"; ?> </td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>:</td>
                    <td> <?php  echo $total; ?> </td>
                </tr>
            </table>
        </fieldset>
    <?php
    endif;
    ?>
</body>

</html>