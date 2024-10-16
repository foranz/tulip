<?php
include 'connect.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM treatment WHERE id = $id");
echo "<script> alert ('Data Berhasil Dihapus')</script>";
header("refresh:0;treatmentindex.php");
?>
