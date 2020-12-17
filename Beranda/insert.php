<?php
	include "koneksi.php";
 
	$id_costumer = $_POST["id_costumer"];
	$nama = $_POST["nama"];
	$tipe = $_POST["tipe"];
	$fasilitas = $_POST["fasilitas"];
	$jumlah_beli = $_POST["jumlah_beli"];
	$uang_muka = $_POST["uang_muka"];
	$jangka_kredit = $_POST["jangka_kredit"];
	
	
	$harga = mysqli_query($koneksi,"SELECT harga FROM rumah WHERE tipe = '$tipe'");
	
	$row = $harga->fetch_assoc();
	
	
	
	if($fasilitas=="terali"){
		$harga_fasilitas = 600000;
	}
	else if($fasilitas=="pagar"){
		$harga_fasilitas = 3500000;
	}
	else if($fasilitas=="kitchen_set"){
		$harga_fasilitas= 2000000;
	}
	else{
		$harga_fasilitas = 4500000;
	}
	$harga_fasilitas = $harga_fasilitas * $jumlah_beli;
	
	$hutang = ($row['harga']+$harga_fasilitas) * $jumlah_beli;
	
	
	$suku_bunga = mysqli_query($koneksi,"SELECT suku_bunga FROM rumah WHERE tipe = '$tipe'");
	$suku = $suku_bunga->fetch_assoc();
	
	$hutang_bunga = $hutang * $suku['suku_bunga'] / 100;
	
	
	$total_hutang = $hutang - $hutang_bunga;
	$angsuran = $total_hutang / ($jangka_kredit*12);
	
	
 	// query sql
	$sql = "INSERT INTO transaksi VALUES(' ','$id_costumer','$jumlah_beli','$harga_fasilitas','$uang_muka','$hutang','$hutang_bunga','$total_hutang','$jangka_kredit','$angsuran')";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
	$sql2 = mysqli_query($koneksi,"INSERT INTO costumer VALUES('$id_costumer','$nama',' ','')");
 
	// mengalihkan halaman kembali ke index.php
		header("location:index.php");
		
	if($query){
		echo "\n Data berhasil di insert!";
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}
 
	mysqli_close($koneksi);
 
?>