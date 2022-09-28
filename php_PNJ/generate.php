<?php 
//generate 
$nama = " Agus Setiawan";
$umur = 19;
$alamat = "JL. karang Anyar";
$pekerjaan = "Mahasiswa";
$no_hp="088213715343";
$no_wa="022545454555";
$no_telegram ="@jesus";

//output
 echo "Nama : $nama". "<br>";
 echo "Umur : $umur". "<br>";
 echo "Alamat : $alamat". "<br>";
 echo "Pekerjaan : $pekerjaan". "<br>";
 echo "No. HP : $no_hp"."<br>";
 echo "No. WA : $no_wa"."<br>";
 echo "Nama Telegram : $no_telegram"."<br>";

echo "<hr>"
?>


<?php 
// Menghitung luas tanah
$panjang = 10;
$lebar =5;
$luas = $panjang * $lebar;
echo "Saya memiliki tanah dengan panjang $panjang meter  dan lebar $lebar meter. Luas tanah saya adalah " .$luas."meter persegi.";
echo"<hr>";

?>


<?php 
//Pengecekan Umur
if ($umur >= 18){
    echo " <br> Saya sudah dewasa";

}else{
    echo "<br> kamu pedopil";

}

?>

// Pengecekan switchcase
<?php 
switch($pekerjaan){
    case "Mahasiswa":
      echo "<br> saya adalah seorang mahasiswa";
      break;

    case "pegawai":
      echo "<br> saya adalah seorang pegawai";
      break;

    default:
      echo "<br> saya adalah seorang $pekerjaan";
      break;
    
  }
?>

<?php 


//menghitung volume bola 

$jarijari1 = 15; 
$volume = 4 / 3 * 22/7 * ($jarijari1 * $jarijari1 * $jarijari1); 

echo "<br> 1. Volume bola dengan jari-jari $jarijari1 cm adalah $volume cm^3" . "<br>"; 

//menghitung luas lingkaran 
$jarijari2 = 20; 
$luas = 22/7 * ($jarijari2 * $jarijari2); 

echo "2. Luas Lingkaran dengan jari-jari $jarijari2 cm adalah $luas cm^2" . "<br>"; 

//menghitung volume balok 
$panjang = 10; 
$lebar = 5; 
$tinggi = 7; 
$volbalok = $panjang * $lebar * $tinggi; 

echo "3. Volume balok dengan panjang $panjang m, lebar $lebar m, dan tinggi $tinggi m adalah $volbalok m^3";
?>

