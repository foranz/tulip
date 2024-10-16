<?php
//koneksi ke database
include "connect.php";

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$instagram = $_POST['instagram'];
$no_hp = $_POST['no_hp'];
$tanggal = $_POST['tanggal'];
$status = $_POST['status'];
$perawatan = $_POST['perawatan'];

if ($perawatan == "I2PL Whitening Rejuve" && $status == "bukan") {
    $harga = 450000;
    $total = $harga;
} else
if ($perawatan == "I2PL Acne" && $status == "bukan") {
    $harga = 405000;
    $total = $harga;
} else
if ($perawatan == "I2PL Acne dan Whitening" && $status == "bukan") {
    $harga = 585000;
    $total = $harga;
} else
if ($perawatan == "Laser Acne" && $status == "bukan") {
    $harga = 405000;
    $total = $harga;
} else
if ($perawatan == "Laser Whitening" && $status == "bukan") {
    $harga = 405000;
    $total = $harga;
} else
if ($perawatan == "I2PL Whitening Rejuve" && $status == "member") {
    $harga = 450000;
    $diskon = $harga * 0.25;
    $total = $harga - $diskon;
} else
if ($perawatan == "I2PL Acne" && $status == "member") {
    $harga = 405000;
    $diskon = $harga * 0.25;
    $total = $harga - $diskon;
} else
if ($perawatan == "I2PL Acne dan Whitening" && $status == "member") {
    $harga = 585000;
    $diskon = $harga * 0.25;
    $total = $harga - $diskon;
} else
if ($perawatan == "Laser Acne" && $status == "member") {
    $harga = 405000;
    $diskon = $harga * 0.25;
    $total = $harga - $diskon;
}
if ($perawatan == "Laser Whitening" && $status == "member") {
    $harga = 405000;
    $diskon = $harga * 0.25;
    $total = $harga - $diskon;
}
$harga = $harga;

$pesan = mysqli_query($koneksi, "insert into pemesanan values ('$nik','$nama','$alamat','$ig','$no_hp','$tgl','$status','$perawatan','$harga','$diskon','$total')");

if ($pesan) {
    echo "<script> alert ('Data Berhasil Disimpan')</script>";
    header("refresh:0;orderindex.php");
} else {
    echo "<script> alert ('Data Tidak Berhasil Disimpan')</script>";
    header("refresh:0;ordertambah.php");
}

?>