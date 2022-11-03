<?php require "functions.php" ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Produk</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <div class="row">
                <div class="col-0">
                </div>
                <div class="col-5">
                    <ul>
                
                        <li><a href="index.php">Home</a></li>
                        <li> <a href="read.php">Catalogue</a></li>
                        <li> <a href="create.php">Add Product</a></li>
                       
                    </ul>
                </div>
                <div class="col-4">
                    <form method="get">
                        <div class="input-group">
                            <div class="form-outline">
                                <input type="search" name="search" id="form1" placeholder="What are you looking for?" class="form-control"/>                                
                            </div>
                            <input type="submit" class="btn btn-primary" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <br>
    <br>
    <br>
    <br>

    <center><font face="Courier New" color="black" size="20"> Welcome </font></center>
    <center><font face="Courier New" color="black" size="3"> Think different, Think thrift </font> </center> <br>
    <center><a href="read_detail.php" type="submit" class="btn btn-primary">Get Started</a></center>
    <div class="wrapper">
        <div cass="row">
    </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYD1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
</body>
</html>