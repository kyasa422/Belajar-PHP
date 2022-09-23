<?php 
    if( isset($_POST["send"])){
            if( $_POST["username"] == "admin" && $_POST["password"] == "admin"){

                header("location:admin.php");
                exit;
            }
            else{

                $error=true;
            }

    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php 
        if( isset($error)):?>
        <p style=" color:yellow;"> Password atau Username Salah</p>
        
        <?php endif;?>
    <h2> Login admin</h2>
    <ul>
    <form action="" method="post">
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username"> <br>
        </li>
        <li>
            <br>
            <label for="password">Password  :</label>
            <input type="password" name="password" id="password">

            <br>
        </li>
        <li>
            <button type="submit" name="send">Login</button>

        </li>

       
        

    


    </form>

    </ul>
</body>
</html>