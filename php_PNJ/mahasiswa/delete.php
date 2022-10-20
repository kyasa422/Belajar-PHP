<?php 
require 'functions.php';


$id = $_GET["id_mahasiswa"];

if(hapus($id) >0){
     echo"
        <script>
            alert('data berhasil di hapus !');
            document.location.href ='index.php';
        </script>
        ";
}else{
     echo"
        <script>
            alert('data berhasil di hapus !');
            document.location.href ='index.php';
        </script>
        ";
}

?>