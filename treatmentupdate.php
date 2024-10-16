<?php
// koneksi ke database
include 'connect.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$detail = $_POST['detail'];

$tmp_file = $_FILES['gambar']['tmp_name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$nama_file = $_FILES['gambar']['name'];
$extensi_file = pathinfo($nama_file, PATHINFO_EXTENSION);
$nama_file_baru = uniqid().'.'.$extensi_file;
$path = "asset/".$nama_file_baru;

if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {
  if ($ukuran_file <= 2000000) {
    if (move_uploaded_file($tmp_file, $path)) {
      $sql = mysqli_query($koneksi, "UPDATE treatment SET nama='".$nama."', harga='".$harga."', detail='".$detail."', gambar='".$nama_file_baru."' WHERE id='".$id."'");
      if ($sql) {
        // Tambahkan query INSERT untuk memasukkan data baru ke dalam tabel treatment
        $insert = mysqli_query($koneksi, "INSERT INTO treatment (nama, harga, detail, gambar) VALUES ('$nama', '$harga', '$detail', '$nama_file_baru')");
        if ($insert) {
          echo "<script> alert ('Data Berhasil Disimpan')</script>";
          header("location: treatmentindex.php");
        } else {
          echo "<script> alert ('Maaf, Terjadi Kesalahan saat menyimpan data baru')</script>";
          header("location: treatmentindex.php");
        }
      } else {
        echo "<script> alert ('Maaf, Terjadi Kesalahan saat menyimpan di database')</script>";
        header("location: treatmentindex.php");
      }
    } else {
      echo "Maaf, Terjadi kesalahan saat mengunggah gambar";
      echo "<br><a href='treatmentupdate.php?id=".$id."'>Kembali Ke Form</a>";
    }
  } else {
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 2MB";
    echo "<br><a href='treatmentupdate.php?id=".$id."'>Kembali Ke Form</a>";
  }
} else {
  echo "Terjadi Kesalahan pada saat menyimpan di database";
  echo "<br><a href='treatmentupdate.php?id=".$id."'>Kembali Ke Form</a>";
}
?>
