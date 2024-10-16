<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style_pemesanan.css">
    <title>Order</title>
</head>
<body>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="order.css">

        <script src="https://kit.fontawesome.com/7743736080.js" crossorigin="anonymous"></script>

        <title>Order</title>
    </head>
    <body>
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
        <!-- Form Pemesanan-->
        <!-- Form Pemesanan Tiket -->
        <div class="mx-auto" style="width: 800px">
            <div class="card">
                <div class="card-body">
                <center><h3>FORM PEMESANAN</h3></center><hr>
                    <form action="proses.php" method="post" name="pesan">
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
                                <input type="text" class="form-control" id="instagram" name="instagram" require>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_hp" class="col-sm-3 col-form-label">No. Handphone</label>
                            <div class="col-sm-9 ml-auto">
                                <input type="text" class="form-control" id="no_hp" name="no_hp" require>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-9 ml-auto">
                                <input type="date" class="form-control" id="tanggal" name="tanggal" require>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-sm-5 col-form-label">Status</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="option1" value="member" require>
                                <label class="form-check-label " for="exampleRadios1">
                                    Member
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="option2" value="bukan">
                                <label class="form-check-label" for="exampleRadios2">
                                    Bukan Member
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

                        <br>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkbox" value="check" id="setuju" required="">
                                <label class="form-check-label setuju">Saya telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan.</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md">
                                <button type="submit" class="btn btn-success" name="total" id="total" value="pesan">Lanjut</button>
                            </div>
                            <div class="col-md">
                                <button type="reset" class="btn btn-success" name="cancel">Kembali</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <br><br>

        <!-- footer -->
        <div id="kontak" class="copyright text-center text-white font-weight-bold bg-success p-3 w-100">
            <p>Developed by klinik kecantikan @Copyright </p>
        </div>

        <div id="kontak" class="copyright text-center text-white font-weight-bold bg-dark p-3 w-100">
  <font color="white" size="6">Find Us</font><br>
  <a href="https://www.instagram.com/polsriofficial/?hl=id" class="btn btn-lg active" role="button" aria-pressed="true"> <h1><i class="fab fa-instagram text-danger"></i></h1></a>
  <a href="http://line.me/D" class="btn  btn-lg active" role="button" aria-pressed="true"> <h1><i class="fab fa-line text-success"></i></h1> </a>
  <a href="https://web.facebook.com/Polsri/?locale=id_ID&_rdc=1&_rdr" class="btn btn-lg active" role="button" aria-pressed="true"> <h1><i class="fab fa-facebook text-primary"></i></h1> </a>
</div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    </html>
