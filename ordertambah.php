<?php 
include 'connect.php';
?>
<!doctype HTML>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
    <style type="text/css">
      body{
        background: #D5C9D8;
    }
    h5{
        color: black;
    }
</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light  fixed-top" style="background-color: green">
    <div class="container-fluid">
      <a class="navbar-brand" href="Index.php">
          <img src="..asset/logo.png" width="60"><B> KLINIK KECANTIKAN TULIP</B>  
          <?php
          include 'connect.php';
          $admin = mysqli_query($koneksi, "select * from admin"); 
          $a = mysqli_fetch_object($admin);  
      ?>| <?php echo $a->name?></a>
      <a href="login.php" style="color: #ffffff"><i class="fa fa-sign-out" aria-hidden="true"></i><span> Log-out</span></a>
      <!--data toogle : menampilkan javascript-->
    </div>
  </nav>
<div class="row no-glutters mt-5"> <!--navbar tdk ada jarak-->
    <div class="col-md-2 mt-2 pr-3 pt-4" style="background-color: green">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="admin.php"><i class="fa fa-tachometer"></i>   Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
          <a class="nav-link text-white" href="treatmentindex.php"><i class="fa fa-user-md"></i>  Treatment </a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
          <a class="nav-link text-white" href="orderindex.php"><i class="fa fa-book"></i> Pemesanan </a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
          <a class="nav-link text-white" href="penggunaindex.php"><i class="fa fa-users"></i>  Pengguna </a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
          <br>
      </li>
  </ul>
</div>
<div class="col-md-10 p-5 pt-3" style="padding-top: 500px">
  <h3><i class="fa fa-user-md"></i>   Tambah Pemesanan</h3><hr><hr>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-danger">Pemesanan Baru</h6>
  </div>
  <div class="card-body">
    <div class="card-body">
        <form class="user" action="orderadd.php" method="post" enctype="multipart/form-data">
        <div class="form-group row">
              <label for="nik" class="col-sm-3 col-form-label">NIK</label>
              <div class="col-sm-9 ml-auto">
                <input type="text" class="form-control" id="nik" name="nik" require>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-3 col-form-label">Nama</label>
              <div class="col-sm-9 ml-auto">
                <input type="text" class="form-control" id="nama" name="nama" require>
              </div>
            </div>
            <div class="form-group row">
              <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
              <div class="col-sm-9 ml-auto">
                <textarea class="form-control" id="alamat" name="alamat" rows="3" require></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="ig" class="col-sm-3 col-form-label">Instagram</label>
              <div class="col-sm-9 ml-auto">
                <input type="text" class="form-control" id="ig" name="ig" require>
              </div>
            </div>
            <div class="form-group row">
              <label for="no_hp" class="col-sm-3 col-form-label">No. Handphone</label>
              <div class="col-sm-9 ml-auto">
                <input type="text" class="form-control" id="no_hp" name="no_hp" require>
              </div>
            </div>
            <div class="form-group row">
              <label for="tgl" class="col-sm-3 col-form-label">Tanggal</label>
              <div class="col-sm-9 ml-auto">
                <input type="date" class="form-control" id="tgl" name="tgl" require>
              </div>
            </div>
            <div class="form-group row">
              <label for="status" class="col-sm-4 col-form-label">Status</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="option1" value="member" require>
                <label class="form-check-label " for="exampleRadios1">
                  Member
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="option2" value="bukan">
                <label class="form-check-label" for="exampleRadios2">
                  Bukan
                </label>
              </div>
            </div>
            <div class="form-group row">
              <label for="dropdown" class="col-sm-3 col-form-label">Perawatan</label>
              <div class="col-sm-9 ml-auto">
                <select class="form-control" id="perawatan" name="perawatan" require>
                  <option value="I2PL Whitening Rejuve">I2PL Whitening Rejuve</option>
                  <option value="I2PL Acne">I2PL Acne</option>
                  <option value="I2PL Acne dan Whitening">I2PL Acne dan Whitening</option>
                  <option value="Laser Acne">Laser Acne</option>
                  <option value="Laser Whitening">Laser Whitening</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <a href="orderindex.php" class="btn btn-warning btn-block btn">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali
                    </a>
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-success btn-block" name="simpan" value="simpan" >
                        <i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
