<?php 
if ( !isset($_GET["nama"])){
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
   
    </style>
</head>
<body>
    
        <ul>
            <li><img src="img/<?php echo $_GET['gambar'] ?>" width="300px"></li>
            <li><?= $_GET["nama"]?></li>
            <li><?= $_GET["email"]?></li>
        </ul>
    <a href="index.php">Kembali ke daftar mahasiswa</a>
</body>
</html>