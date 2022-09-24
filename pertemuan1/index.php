<?php
    $mahasiswa = 
        [
            [   "nama" =>"Agus Setiawan",
                "email" => "hyenseok422@gmail.com",
                "gambar"=>"1.jpg"
            ],
            [
                "nama"=>"Nibras alyasar",
                "email"=>"nibras@gmail.com",
                "gambar"=>"2.jpg"    
            ]
        ];
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>get</title>
    </head>
    <body>
        <h1> Daftar mahasiswa </h1>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <ul>
               
                <li> 
                    <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&email=<?= $mhs["email"];?>&gambar=<?=$mhs["gambar"];?>"> <?= $mhs["nama"];?> </a>   
                
                </li>
             
                
                <br>
            </ul>
        <?php endforeach; ?>
    </body>
    </html>