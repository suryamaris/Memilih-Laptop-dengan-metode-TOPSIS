<?php
	include "koneksi.php";
 
	$idh = $_GET["hapus_id"];
 
	// query sql
	$sql = "DELETE FROM laptop WHERE tipe='$tipe'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
	if($query){
		echo "Data berhasil di Hapus!";
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}
 
	// mengalihkan halaman kembali ke index.php
		header("location:index.php");
	mysqli_close($koneksi);
?>