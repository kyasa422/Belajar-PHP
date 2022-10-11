<?php 
    if( isset($_POST["submit"])): ?>
        
       <p>Selamat datang <?= $_POST["nama"]; ?> </p>
    <?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
   



    <form action="" method="post">

    <label for="">Masukan nama</label>
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit"> kirim</button>
    </form>
</body>
</html>