<?php 
$db = mysqli_connect("localhost", "root", "", "akademik");


function  query($query)
{
  global $db;
  $result = mysqli_query($db, $query);
  $rows = [];

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function addData($data)
{
  global $db;
  //ambil data dari setiap elemen dalam form
  $nama = htmlspecialchars($data["nama"]);
  $nim = htmlspecialchars($data["nim"]);
  $tugas = htmlspecialchars($data["tugas"]);
  $uts = htmlspecialchars($data["uts"]);
  $uas = htmlspecialchars($data["uas"]);

  

  // querry insert data
  $query = "INSERT INTO mahasiswa 
              VALUES('','$nama','$nim','$tugas','$uts','$uas')";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}

function hapus($id)
{
  global $db;
  mysqli_query($db, "DELETE FROM mahasiswa where id_mahasiswa=$id");
  return mysqli_affected_rows($db);
}


function update($data)
{
  global $db;
  $id = $data["id_mahasiswa"];
  $nama = htmlspecialchars($data["nama"]);
  $nim = htmlspecialchars($data["nim"]);
  $tugas = htmlspecialchars($data["tugas"]);
  $uts = htmlspecialchars($data["uts"]);
  $uas = htmlspecialchars($data["uas"]);

  $query = "UPDATE  mahasiswa SET
                    nama = '$nama',
                    nim = '$nim',
                    tugas ='$tugas',
                    uts ='$uts',
                    uas ='$uas'
                    WHERE id_mahasiswa = $id ";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}


function cari($keyword)
{
  $query = "SELECT * FROM mahasiswa 
                  WHERE 
                  nama LIKE '%$keyword%' OR
                  nim LIKE '%$keyword%'
           
            ";
  return query($query);
}


