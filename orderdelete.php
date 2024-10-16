<?php
include 'connect.php';
$nik = $_GET['nik'];
mysqli_query($koneksi, "DELETE FROM pemesanan WHERE nik = $nik");
echo "<script> alert ('Data Berhasil Dihapus')</script>";
header("refresh:0;orderindex.php");
?>
