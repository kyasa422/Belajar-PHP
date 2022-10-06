<?php
require 'funtions.php';

if (isset($_POST["register"])) {

    if (registerasi($_POST) > 0) {
        echo "<script>
                    alert('User berhasil di tambahkan');
                    document.location.href ='login.php';
                    </script>";
    } else {
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
    <!-- //bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Registrasi</title>
</head>

<body>

    <h2 class="text-center">Halaman Registrasi</h2>
   

    <form action="" method="post" class="w-25 border border-primary mx-auto p-3">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" id="password" name="password2">
        </div>

        <button type="submit" class="btn btn-primary mx-auto" name="register">Sign Up</button>
    </form>

</body>

</html>