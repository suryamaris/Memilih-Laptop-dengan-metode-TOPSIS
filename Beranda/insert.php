<?php
	include "koneksi.php";
 
	$tipe = $_POST["tipe"];
	$merk = $_POST["merk"];
	$cpu = $_POST["cpu"];
	$c_tipe = $_POST["c_tipe"];
	$c_generasi = $_POST["c_generasi"];
	$c_kecepatan = $_POST["c_kecepatan"];
	$ram = $_POST["ram"];
	$r_kapasitas = $_POST["r_kapasitas"];
	$r_ddr = $_POST["r_ddr"];
	$hdd = $_POST["hdd"];
	$ssd = $_POST["ssd"];
	$vga = $_POST["vga"];
	$v_merk = $_POST["v_merk"];
	$v_ddr = $_POST["v_ddr"];
	$v_kecepatan = $_POST["v_kecepatan"];
	$v_kapasitas = $_POST["v_kapasitas"];
	$layar = $_POST["layar"];
	$harga = $_POST["harga"];
	
	
 	// query sql
	$insert_laptop = mysqli_query($koneksi,"INSERT INTO laptop VALUES('$tipe','$merk','$cpu','$ram','$hdd','$ssd','$vga','$layar','$harga')");
	$insert_laptop2 = mysqli_query($koneksi,"INSERT INTO rekom_laptop(tipe) VALUES('$tipe')");
	$insert_laptop3 = mysqli_query($koneksi,"INSERT INTO score_laptop(tipe) VALUES('$tipe')");
	$insert_laptop4 = mysqli_query($koneksi,"INSERT INTO normal_laptop(tipe) VALUES('$tipe')");
	$insert_laptop5 = mysqli_query($koneksi,"INSERT INTO prefensi(tipe) VALUES('$tipe')");

	

	$insert_cpu = mysqli_query($koneksi,"INSERT INTO cpu VALUES('$cpu','$c_tipe','$c_generasi','$c_kecepatan',' ',' ')");
	

	
		$insert_vga = mysqli_query($koneksi,"INSERT INTO vga VALUES('$vga','$v_merk','$v_ddr','$v_kecepatan','$v_kapasitas',' ')");
		


	
// mengalihkan halaman kembali ke index.php
		header("location:insert2.php");
		
	if($query){
		echo "\n Data berhasil di insert!";
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}
 
	mysqli_close($koneksi);
 
?>