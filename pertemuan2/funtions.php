<?php
// Koneksi ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar");


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
  $nrp = htmlspecialchars($data["nrp"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);

  //upload 
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  // querry insert data
  $query = "INSERT INTO mahasiswa 
              VALUES('','$nama','$nrp','$email','$jurusan','$gambar')";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}


function upload()
{
  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];
  //cek apakah tidak ada gambar yang di upload
  if ($error === 4) {
    echo "<script>
              alert('Pilih gambar terlebih dahulu');
              </script>";
    return false;
  }

  $ekstensiGambarValid = ['jpg', 'jpeg', 'png','gif'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {

    echo "<script>
              alert('Yang anda upload bukan gambar');
              </script>";
    return false;
  }

  //jika ukuran terlalu besar
  if ($ukuranFile > 1000000) {
    "<script>
              alert('size gambar terlalu besar');
              </script>";
  }

  // lolos pengecekan, gambar siap du upload
  //generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;
  move_uploaded_file($tmpName, '../pertemuan1/img/' . $namaFileBaru);
  return $namaFileBaru;
}



function hapus($id)
{
  global $db;
  mysqli_query($db, "DELETE FROM mahasiswa where id=$id");
  return mysqli_affected_rows($db);
}



function ubah($data)
{
  global $db;
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $nrp = htmlspecialchars($data["nrp"]);
  $email = htmlspecialchars($data["email"]);
  $jurusan = htmlspecialchars($data["jurusan"]);
  $gambarLama = htmlspecialchars($data["gambarlama"]);

  // cek apakah user memilih gambar baru atau tidak
  if ( $_FILES['gambar']['error'] === 4 ){
    $gambar = $gambarLama;
  }else{
    $gambar =upload();
  }

  $query = "UPDATE  mahasiswa SET
                    nama = '$nama',
                    nrp = '$nrp',
                    email ='$email',
                    jurusan ='$jurusan',
                    gambar ='$gambar'
                    where id=$id";
  mysqli_query($db, $query);
  return mysqli_affected_rows($db);
}


function cari($keyword)
{
  $query = "SELECT * FROM mahasiswa 
                  WHERE 
                  nama LIKE '%$keyword%' OR
                  nrp LIKE '%$keyword%' OR
                  email LIKE '%$keyword%' OR
                  jurusan LIKE '%$keyword%' 
            ";
  return query($query);
}
