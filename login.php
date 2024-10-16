<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>
</head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="login.css">

<body style="background-image: url('asset/klinik.jpg');">
    <!-- Login -->
    <div class="container" style="background-color: white;">
        <h2 class="text-center" style="font-family: poppins;">Login Admin</h2><br>
        <form class="login_form" action="" method="POST" name="form">
            <div class="form-group" id="login">
                <div class="username">Username</div>
                <input autocomplete="off" type="text" name="username" class="form-control" placeholder="Masukkan Username Anda">
            </div> 
            <div class="form-group">
                <div class="password">Password</div>
                <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
            </div>
            <div class="form-group form-check" style="padding-left: 30px;">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
                <label class="form-check-label" for="exampleCheck1">Show Password</label>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <a class="btn btn-primary btn-user btn-primary btn-block" href="Index.php">
                    <button type="submit" class="btn btn-primary" name="login" style="width: 370px; height: 25px;">Login</button>
                    </a>
                    <a href="Index.php">
                    <a class="btn btn-danger btn-user btn-danger btn-block" href="Index.php">
                        <button type="button" class="btn btn-danger" name="back" style="width:370px;height: 25px;">Kembali Ke Home</button>
                    </a>
                    <a href="Index.php">
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<?php 
include 'connect.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($koneksi,"select * from admin where username = '$username' AND password='$password'");
    $sesi   = mysqli_num_rows($data);

    if ($sesi > 0) {
        $d = mysqli_fetch_object($data);
        $_SESSION['a_global']=$d;
        $_SESSION['id']=$d->id_admin;

        
        echo '<script>alert("Login Berhasil")</script>';
        header("refresh:0;admin.php");
    }else{
        echo '<script>alert("Login Gagal")</script>';
        header("refresh:0;#login.php");
    }
}
?>
