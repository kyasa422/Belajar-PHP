<?php 
// Koneksi ke database
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

function tambah($data)
{   
  global $db;
  //ambil data dari setiap elemen dalam form
  $nama = htmlspecialchars($data["nama"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $salary = htmlspecialchars($data["salary"]);


  $query = "INSERT INTO pegawai
  VALUES('','$nama','$alamat','$salary')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
 
}



?>