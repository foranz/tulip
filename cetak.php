<?php
include 'connect.php';

$nik = $_GET['nik'];
$t = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE nik='$nik'");
$d = mysqli_fetch_object($t);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tampilan Kwitansi</title>
</head>
<link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="index.css">

<body>
    <!-- Tampilan Tiket Pemesanan -->
    <h1 align="center"><b><i>KWITANSI</b></i></h1>
    <hr width="300"><br>
    <table align="center" cellpadding="3" align="center" width="500">
        <tr>
            <td>NIK</td>
            <td>: <?php echo $d->nik ?></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>: <?php echo $d->nama ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : <?php echo $d->alamat ?></td>
        </tr>
        <tr>
            <td>Instagram</td>
            <td> : <?php echo $d->instagram ?></td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td>: <?php echo $d->no_hp ?></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>: <?php echo $d->tanggal ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>: <?php echo $d->status ?></td>
        </tr>
        <tr>
            <td>Perawatan</td>
            <td>: <?php echo $d->perawatan ?></td>
        </tr>

        <tr>
            <td>Harga</td>
            <td>: Rp. <?php echo $d->harga ?></td>
        </tr>
        <tr>
            <td>Potongan Harga</td>
            <td>: (Rp. <?php echo $d->diskon ?> )</td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td>: Rp. <?php echo $d->total ?></td>
        </tr>
    </table>

    <script>
        window.print()
    </script>
</body>

</html>
