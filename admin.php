<?php include 'connect.php'; ?>
<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">
    -->
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
          <img src="asset/logo1.png" width="60"><B> KLINIK KECANTIKAN CLEOPATRA</B>  
          <?php
          include 'connect.php';
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
          <a class="nav-link active text-white" aria-current="page" href="#"><i class="fa fa-tachometer"></i>   Dashboard</a><hr class="bg-secondary">
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
    </div>
  <div class="container"style="margin-top:-350px; margin-left: 240px;">
    <div class="col-md-12 p-5 pt-3">
      <h3><i class="fa fa-tachometer"></i>   Dashboard</h3><hr><hr>
      <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
          <a href="treatmentindex.php"class="text-decoration-none card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Treatment</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php
                    $treatment = mysqli_query($koneksi, "select * from treatment");
                    $jlm_treat = mysqli_num_rows($treatment);
                    echo $jlm_treat;
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <h1><i class="fa fa-user-md" aria-hidden="true"></i></h1>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
          <a href="orderindex.php"class="text-decoration-none card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pesanan</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php 
                    $pesanan = mysqli_query($koneksi, "select * from pemesanan");
                    $jlm_order = mysqli_num_rows($pesanan);
                    echo $jlm_order;
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <h1><i class="fa fa-book" aria-hidden="true"></i></h1>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
          <a href="penggunaindex.php"class="text-decoration-none card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pengguna</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    <?php 
                    $user = mysqli_query($koneksi, "select * from admin");
                    $jlm_user = mysqli_num_rows($user);
                    echo $jlm_user;
                  ?></div>
                </div>
                <div class="col-auto">
                  <h1><i class="fa fa-users" aria-hidden="true"></i></h1>
                </div>
              </div>
            </div>
          </a>
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
