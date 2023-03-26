<?php 

include("connect.php");
$username=$_POST['username'];
$email=$_POST['email'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$sql_user = "SELECT * FROM login WHERE user='$username' and email='$email'";
$hasil_user = mysqli_query($koneksi, $sql_user);
$rowcount = mysqli_num_rows($hasil_user);
if($password1 == $password2){
if($rowcount == 1){
   mysqli_query($koneksi, "UPDATE login set password=MD5('$password1') where user='$username' and email='$email'");
   header("Location:login.php?msg=Password Berhasil Diubah!");
}else{
    header("Location:lupapassword.php?msg=Reset Password Gagal!");
}
}else{
    header("Location:lupapassword.php?msg=Password tidak sama!");
}

?>