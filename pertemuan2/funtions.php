<?php 
// Koneksi ke database
  $db = mysqli_connect("localhost","root", "", "phpdasar");


  function  query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }   
    return $rows;
  }

  function tambah($data){
    global $db;
       //ambil data dari setiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
     
    $jurusan=htmlspecialchars($data["jurusan"]);
    $gambar= htmlspecialchars($data["gambar"]);

         // querry insert data
     $query ="INSERT INTO mahasiswa 
                VALUES('','$nama','$nrp','$email','$jurusan','$gambar')
                ";   
    mysqli_query($db,$query);

    return mysqli_affected_rows($db);

  }

  function hapus($id){
      global $db;
      mysqli_query($db, "DELETE FROM mahasiswa where id=$id");
      return mysqli_affected_rows($db);
  }



  function ubah($data){
    global $db;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
     
    $jurusan=htmlspecialchars($data["jurusan"]);
    $gambar= htmlspecialchars($data["gambar"]);

         $query ="UPDATE  mahasiswa SET
                 nama = '$nama',
                 nrp = '$nrp',
                 email ='$email',
                 jurusan ='$jurusan',
                 gambar ='$gambar'
                 where id=$id
                ";   

    mysqli_query($db,$query);

    return mysqli_affected_rows($db);

  

  }
?>