
<!DOCTYPE html>
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
          <img src="asset/logo1.png" width="60"><B> KLINIK KECANTIKAN TULIP</B>  
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
          <a class="nav-link active text-white" aria-current="page" href="admin.php"><i class="fa fa-tachometer"></i>   Dashboard</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="treatmentindex.php"><i class="fa fa-user-md"></i> Treatment </a><hr class="bg-secondary">
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
    <div class="col-md-10 mt-5 p-5 pt-3" style="padding-top: 800px;">
      <h3><i class="fa fa-users"></i>  Pengguna Terdaftar</h3><hr><hr>
      <div class="row">
        <!-- Area Chart -->
        <div class="col">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-danger">Pengguna</h6>
              <a href="penggunaupdate.php" class="d-none d-sm-inline-block btn btn-danger btn-sm shadow-sm">
                <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Pengguna</a>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-sm" id="pesanan" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>id Pengguna</th>
                        <th>Nama Pengguna</th>
                        <th>Email Pengguna</th>
                        <th>Tindakan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      include 'connect.php';
                      $admin = mysqli_query($koneksi, "select * from admin");
                      while($row=$admin->fetch_object()){
                        ?>
                        <tr>
                          <td><?php echo $row->id_admin ?></td>
                          <td><?php echo $row->name ?></td>
                          <td><?php echo $row->username ?></td>
                          <td>
                        <a href ="<?php echo "penggunaedit.php?id_admin=".$row->id_admin ?>" class="btn btn-circle btn-sm btn-warning">
                          <i class="fa fa-pencil" aria-hidden="true"></i><span> Edit</span>
                        </a>
                        <a href ="<?php echo "penggunadelete.php?id_admin=".$row->id_admin ?>" class="btn btn-circle btn-sm btn-secondary">
                          <i class="fa fa-trash" aria-hidden="true"></i><span> Hapus</span>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
