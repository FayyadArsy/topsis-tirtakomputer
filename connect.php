<?php 
$host= "localhost";
$user= "root";
$pass= "";
$dbase= "tirta";

$koneksi=mysqli_connect($host, $user, $pass, $dbase);
if(!$koneksi){
    die("Database tidak konek");
}
$seleksi=mysqli_select_db($koneksi, $dbase);
if(!$seleksi){
    die("Database  tidak terseleksi");
}
?>