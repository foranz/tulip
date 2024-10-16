<?php
include 'connect.php';
$nik = $_GET['nik'];

$t = mysqli_query($koneksi, "SELECT * from pemesanan WHERE nik='$nik'");
$d = mysqli_fetch_object($t);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tampilan Konfirmasi</title>
</head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

<body>
    <!-- Tampilan Konfirmasi Pemesanan -->
    <p>
    <h1 align="center"><b><i>Pesanan</b></i></h1>
    <center>
        <h4>Berikut detail pesananmu</h4>
    </center>
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
            <td> : <?php echo $d->ig ?></td>
        </tr>
        <tr>
            <td>No. HP</td>
            <td>: <?php echo $d->no_hp ?></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>: <?php echo $d->tgl ?></td>
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
        <tr>
            <td>
                <a href="form_order.php" class="btn btn-primary">Kembali</a>
                <a href="<?php echo "cetak.php?nik=" . $nik ?>" class="btn btn-primary">Pesan & Cetak</a>
            </td>
        </tr>
    </table>
    <br>
</body>
</html>
