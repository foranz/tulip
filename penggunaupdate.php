<?php  
//koneksi ke database
include 'connect.php';

$id_admin = $_GET['id_admin'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$pesan = mysqli_query($koneksi," UPDATE admin SET username='".$username."', password='".$password."', name='".$name."' WHERE id_admin='".$id_admin."'");
     
      if(pesan){ 
        echo "<script> alert ('Data Berhasil Diupdate')</script>";
        header("location: penggunaindex.php");
  
      }else{
        echo "Terjadi Kesalahan pada ssat menyimpan di database";
        echo "<br><a href='penggunaupdate.php?id='.$id_admin >Kembali Ke Form</a>";
      }

?>
