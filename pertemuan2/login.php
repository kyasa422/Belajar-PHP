<?php
require 'funtions.php';
session_start();

//register
if (isset($_POST['daftar'])) {
    header("Location:register.php");
}

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($db, "SELECT username from user where id =$id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username sama ngga
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM user WHERE username ='$username' OR email ='$username'");

    // cek usernamenya
    if (mysqli_num_rows($result) === 1) {

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {

            //set session
            $_SESSION["login"] = true;

            // cek remember me
            if (isset($_POST["remember"])) {
                //buat cookie
                setcookie('id', $row['id'], time() + 1800);
                setcookie('key', hash('sha256', $row['username']), time() + 1800);
            }

            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- //bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        h2 {
            text-align: center;
        }
    </style>
    <title>Halaman login</title>
</head>

<body>
    <h2>halaman login</h2>


    <?php if (isset($error)) : ?>
        <p style="color:crimson; font-style:italic;">username/password salah</p>

    <?php endif; ?>




    <form action="" method="post" class="w-25 border border-primary mx-auto p-3">
        <div class="mb-3">
            <label for="username" class="form-label">Username / Email</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>

        <button type="submit" class="btn btn-primary mx-auto" name="login">Sign In</button>
        <button type="submit" class="btn btn-primary mx-auto" name="daftar">Register</button>
    </form>

</body>

</html>