

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" >
    <fieldset>
             <legend>Aplikasi Kasir </legend>
            
             <label for="nama"> Nama Barang</label>
             <input type="text" id="nama" name="nama"> <br>

             <label for="harga"> Harga Barang RP</label>
             <input type="number" id="harga" name="harga"> <br>

             <label for="jumlah"> Jumlah Barang </label>
             <input type="number" id="jumlah" name="jumlah"> <br>

             <label for="diskon"> Diskon</label>
             <input type="checkbox" name="diskon" id="diskon">dapat diskon5%  <br>

             <button name="kirim">Kirim</button>

    </fieldset>
    </form>
       <fieldset>
             <legend>Hasil </legend>
            <?php 
            if (isset($_POST['kirim'])){
            $nama = $_POST['nama'];
            $harga=$_POST['harga'];
            $jumlah=$_POST['jumlah'];
            $total=$harga*$jumlah;
           
            
                
                if(isset($_POST['diskon'])){
                     $diskon=$total*95/100;
                    echo" Nama Barang :$nama <br> Harga Barang : $harga <br> Jumlah Barang : $jumlah <br> Diskon  :5% <br> Total  : $diskon";
                }else{
                     echo" Nama Barang :$nama <br> Harga Barang : $harga <br> Jumlah Barang : $jumlah <br> Diskon  :0% <br> Total  : $total";
                }
           
            }
            ?>
   

    </fieldset>
</body>
</html>