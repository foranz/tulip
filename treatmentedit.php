<?php 
include 'connect.php';
?>
<!doctype html>
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
  <?php
  $id = $_GET['id'];
  ?>
  <nav class="navbar navbar-expand-lg navbar-light  fixed-top" style="background-color: green">
    <div class="container-fluid">
      <a class="navbar-brand" href="Index.php">
        <img src="asset/logo.png" width="60"><B> KLINIK KECANTIKAN CLEOPATRA</B>  
        <?php
        $admin = mysqli_query($koneksi, "select * from admin"); 
        $a = mysqli_fetch_object($admin);  
        ?>| <?php echo $a->name?></a>
        <a href="login.php" style="color: #ffffff"><i class="fa fa-sign-out" aria-hidden="true"></i><span> Log-out</span></a>
        <!--data toogle : menampilkan javascript-->
      </div>
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
          <a class="nav-link text-white" href="penggunaedit.php"><i class="fa fa-users"></i>  Pengguna </a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <br>
        </li>
      </ul>
    </div>
    <div class="col-md-10 p-5 pt-3" style="padding-top: 500px">
      <h3><i class="fa fa-user-md"></i>   Edit Treatment</h3><hr><hr>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">Update Treatment</h6>
        </div>
        <div class="card-body">
          <div class="card-body">
            <?php 
            $treatment = mysqli_query($koneksi, "select * from treatment WHERE id='$id'");
            while ($row=mysqli_fetch_array($treatment)){ 
              $id = $row['id'];
              $nama = $row['nama'];
              $harga = $row['harga'];
              $detail = $row['detail'];
              $gambar = $row['gambar']; 
              ?>
              <form class="user" action="<?php echo "treatmentupdate.php?id=".$id ?>" method="post" enctype="multipart/form-data">

                <div class="form-group row">
                  <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>
                  <div class="col-md-6">
                    <input disabled id="nama" type="text" class="form-control" name="nama" value="<?php echo $nama ?>" required autofocus>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="harga" class="col-md-4 col-form-label text-md-right">Harga</label>
                  <div class="col-md-6">
                    <input disabled id="harga" type="text" class="form-control" name="harga" value="<?php echo $harga ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="detail" class="col-md-4 col-form-label text-md-right">Detail</label>
                  <div class="col-md-6">
                    <input id="detail" type="text" class="form-control" name="detail" value="<?php echo $detail ?>" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-4 col-form-label text-md-right">Gambar</label>
                  <div class="col-md-6">
                    <input type="file" id="gambar"  accept="image/*" name="gambar" id="gambarFile" aria-describedby="fileHelp" class="form-control-file">
                    <small id="fileHelp" class="form-text text-muted">Mohon ukuran file tidak melebihi 2MB.</small>
                  </div>
                  <div class="col-md-11">
                    <td><center><img src ="<?php echo "asset/".$gambar ?>" width=250px></center></td>
                  </div>
                </div>
              <?php } ?>
              <div class="form-group row">
                <div class="col-sm-6">
                  <a href="treatmentindex.php" class="btn btn-warning btn-block btn">
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

