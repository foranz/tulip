<!DOCTYPE html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap, CSS, Font -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="https://kit.fontawesome.com/7743736080.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>

    <title>KLINIK KECANTIKAN</title>

  </head>

  <body id="page-top">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <div class="container">
          <img src="asset/logo1.png" width="60">
        <a class="navbar-brand font-weight-bold text-light" href="#fixed-top">KLINIK KECANTIKAN TULIP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link active" aria-current="page" href="#Home">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#treatment">Treatment</a>
            </li>
            <li class="nav-item active">
             <a class="nav-link" href="#kontak">Contact</a>
            </li>
            <li class="nav-item active">
             <a class="nav-link" href="form_order.php">Order</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

     <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Klinik Kecantikan Tulip</h1>
        <h2>Melayani berbagai perawatan kecantikan untuk anda.</h2>
      </div>
    </div>

        <div class="col-md-9 mt-5">
             <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="asset/s1.jpg" class="d-block w-100" height="450" alt="first slide">
                </div>
                <div class="carousel-item">
                  <img src="asset/s2.jpg" class="d-block w-100" height="450" alt="second slide">
                </div>
                <div class="carousel-item">
                  <img src="asset/s3.jpg" class="d-block w-100" height="450" alt="third slide">
                </div>
              </div>

              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>

          <div class="col-md-3 mt-1 bg-light">
            <div class="list-group p-2 pt-3 mr-3 ">
              <a href="" class="list-group-item active bg-success"> <i class="fas fa-list"></i> Facility</a>
              <a href="" class="list-group-item disabled mb-4"> <i class="fas fa-angle-right"></i> Ruang Ber-AC</a>
              <a href="" class="list-group-item disabled mb-4"> <i class="fas fa-angle-right"></i> Ruang Tunggu</a>
              <a href="" class="list-group-item disabled mb-4"> <i class="fas fa-angle-right"></i> Ruang Perawatan</a>
              <a href="" class="list-group-item disabled mb-4"> <i class="fas fa-angle-right"></i> Welcome Drink</a>
              <a href="" class="list-group-item disabled mb-4"> <i class="fas fa-angle-right"></i> Toilet</a>
              <a href="" class="list-group-item disabled mb-4"> <i class="fas fa-angle-right"></i> Others</a>
            </div>
          </div>
        </div>
      </div>
 <br>
 <br>
 <br>
 <br>
 <br><br>

 <div class="row">
   <!-- CARD:Treatments -->
   <div id="treatment" align="center" class="container">
     <font size="6" face="Century Gothic" color="light-blue"> OUR TREATMENTS<hr></font> <br> 
     <div class="row mx-auto">
       <?php 
       include 'connect.php';
       $treatment = mysqli_query($koneksi, "select * from treatment");
       while($row=$treatment->fetch_object()){
        ?>
        <div class="card" style="width: 13rem; margin: 7px;">
          <img class="card-img-top" src="<?php echo "asset/".$row->gambar ?>" height="230px" alt="Card image cap">
          <div class="card-body bg-light">
            <h5 class="card-title"><?php echo $row->nama ?></h5>
            <font  color="red"><p class="card-text"><?php echo $row->harga ?></p></font><br>
            <a href="#" class="btn btn-success" data-target="<?php echo "#t".$row->id ?>" data-toggle="modal" >Detail</a>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal" id="<?php echo "t".$row->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Treatment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-6">
                    <img height="300px" width="250px" src="<?php echo "asset/".$row->gambar ?>">
                  </div>
                  <div class="col-md-6">
                    <h4><?php echo $row->nama ?></h4>
                    <p><?php echo $row->detail ?></p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      <?php } ?> 
    </div>

    <div id="Location" align="center" class="col-md-10 mb-5 mt-5">
      <font size="6" face="Century Gothic" color="light-blue"> OUR LOCATION<hr></font> <br> 
      <div class="embed-responsive embed-responsive-16by9" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.3782976433313!2d104.72222471446824!3d-2.992338940709656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b758b9299ce97%3A0xb85c81185b9b2dd2!2sJl.%20Darmapala%2C%20Bukit%20Lama%2C%20Kec.%20Ilir%20Bar.%20I%2C%20Kota%20Palembang%2C%20Sumatera%20Selatan!5e0!3m2!1sid!2sid!4v1623160732434!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<footer class="bg-dark text-white p-5 w-100">
  <div id="aboutus" class="row">
    <div class="col-md-3">
      <h5>LAYANAN PELANGGAN</h5>
      <ul>
        <li>Pusat Bantuan</li>
        <li>Cara Pemesanan</li>
        <li>Konsultasi</li>
        <li>Syarat Pembatalan</li>
      </ul>
    </div>
    <div id="aboutus"class="col-md-3">
      <h5>TENTANG KAMI</h5>
      <p>Klinik kecantikan terbaik yang telah berdiri sejak tahun 2019. Hingga saat ini, kami memiliki tiga cabang yang tersebar di beberapa kota di Indonesia. Dua cabang di Palembang, dan satu cabang lagi berada di Kota Bandung.Kami memiliki lebih dari 10 jenis perawatan. Jadi Anda tidak perlu khawatir lagi untuk mencari solusi perawatan kecantikan. Selain kelengkapan jenis perawatan.</p>
    </div>
    <div id="aboutus" class="col-md-3">
      <h5>MITRA KERJASAMA</h5>
      <ul>
        <li>Tokopedia</li>
        <li>Shopee</li>
        <li>Scarlet Whitening</li>
        <li>PT. Farmasi Indonesia</li>
        <li>JNE</li>
      </ul>
    </div>
    <div id="aboutus"class="col-md-3">
      <h5>HUBUNGI KAMI</h5>
      <ul>
        <li>021-2333-7890</li>
        <li>customer@klinikkecantikan.com</li>
      </ul>
    </div>
  </div>
</footer> 

<div id="kontak" class="copyright text-center text-white font-weight-bold bg-success p-3 w-100">
  <p>Developed by klinik kecantikan @Copyright </p>
</div>

<div id="kontak" class="copyright text-center text-white font-weight-bold bg-dark p-3 w-100">
  <font color="white" size="6">Find Us</font><br>
  <a href="https://www.instagram.com/polsriofficial/?hl=id" class="btn btn-lg active" role="button" aria-pressed="true"> <h1><i class="fab fa-instagram text-danger"></i></h1></a>
  <a href="http://line.me/D" class="btn  btn-lg active" role="button" aria-pressed="true"> <h1><i class="fab fa-line text-success"></i></h1> </a>
  <a href="https://web.facebook.com/Polsri/?locale=id_ID&_rdc=1&_rdr" class="btn btn-lg active" role="button" aria-pressed="true"> <h1><i class="fab fa-facebook text-primary"></i></h1> </a>
</div>

<script>
  $(document).ready(function() {
    $('.modal').modal('hide'); // Hide all modals by default
    
    // Show modal when "Detail" button is clicked
    $('.btn[data-target^="#t"]').click(function() {
      var targetModal = $(this).data('target');
      $(targetModal).modal('show');
    });
  });
</script>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>
