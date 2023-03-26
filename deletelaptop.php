<?php
	session_start();
	$user=$_SESSION['username'];
	if (!isset($_SESSION['username'])){
		header("Location:./index.php");
	}
	include("connect.php");
	$id=$_GET['idk'];
	
	$delete_kelas="DELETE FROM laptop WHERE id_laptop='$id'";
	mysqli_query($koneksi,$delete_kelas);
	
	$delete_data="DELETE FROM datalaptop WHERE id_laptop='$id'";
	mysqli_query($koneksi,$delete_data);

	$delete_analisa="DELETE FROM analisa WHERE id_laptop='$id'";
	mysqli_query($koneksi,$delete_analisa);
	header("Location:./listlaptop.php");
?>