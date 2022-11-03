<?php 
    $db = mysqli_connect('localhost','root','','produk');

    if (!$db){
        die ('gagal terhubung : ' .  mysqli_connect_error());
    }


?>