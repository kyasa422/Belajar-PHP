<?php

require 'funtions.php';

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($db, "SELECT * FROM user WHERE username ='$username'");

        // cek usernamenya
        if (mysqli_num_rows($result) === 1 ){
            
            //cek password
            $row= mysqli_fetch_assoc($result);
            if (password_verify($password,$row["password"])){
                header("Location: index.php");
                exit;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

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
                <button type="submit" name="login">Sign In</button>
            </li>
        </ul>
    </form>

</body>

</html>