<?php
require 'funtions.php';

if (isset($_POST["register"])){

        if(registerasi($_POST) >0){
            echo "<script>
                    alert('User berhasil di tambahkan');
                    </script>";

        }else{
            echo mysqli_error($db);
        }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>

<body>

    <h2>Halaman Registrasi</h2>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Sign UP</button>
            </li>
        </ul>
    </form>

</body>

</html>