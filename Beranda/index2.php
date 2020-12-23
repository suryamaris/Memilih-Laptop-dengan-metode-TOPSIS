<!DOCTYPE html>
<html style="">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="My Choice, Rekomendasi, Rp 9.020.100, Informasi, Laptop yang sesuai, INTUITIVE">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>My Laptop</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.1.3, index.php">
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
    <meta charset="utf-8">
    <title>slick Login</title>
    <meta name="description" content="slick Login">
    <meta name="author" content="Webdesigntuts+">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.php",
		"logo": "images/default-logo.png"
}</script>
    <meta property="og:title" content="My Laptop">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.php">
  </head>
  <body data-home-page="inex.<?php  ?>" data-home-page-title="*" class="u-body"><header class="u-clearfix u-header u-header" id="sec-2633">
        
                     
    
    <section class="u-clearfix u-image u-shading u-section-1" src="" id="carousel_6c9b">
      <div class="u-clearfix u-sheet u-sheet-1"><h3 style="color: black;"> Data Laptop </h3>
        <a  href="tambah-data.php"><button type="button" class="btn btn-warning">Tambah Data Laptop</button></a>
        <a  href="index.php"><button type="button" class="btn btn-info">Beranda</button></a>
        <div class="u-container-style u-group u-shape-rectangle u-group-1">
  
  <table class="table table-striped">
  <thead style="color: black; background-color: white;">
    <tr>
      <th scope="col">Tipe</th>
      <th scope="col">Merk</th>
      <th scope="col">Processor</th>
      <th scope="col">RAM</th>
    <th scope="col">Hardisk</th>
      <th scope="col">SSD</th>
      <th scope="col">VGA</th>
      <th scope="col">Layar</th>
    <th scope="col">Harga</th>
      <th scope="col">Gambar</th>
    
    <th colspan="2">Aksi</th>
    </tr>
  </thead>
  
  <tbody>
    
  
  <?php
  
        include "koneksi.php";
 
        // query sql
        $sql = "SELECT * FROM laptop ORDER BY tipe ASC";
        $query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
        //$no = 1; // no. urut
 
        while($data = mysqli_fetch_array($query)){
 
          $tipe = $data["tipe"];
          $merk = $data["merk"];
          $cpu = $data["cpu"];
          $ram = $data["ram"];
          $hdd = $data["hdd"];
          $ssd = $data["ssd"];
          $vga = $data["vga"];
          $layar = $data["layar"];
          $harga = number_format($data["harga"],0,",",".");
          $image = $data["image"];
          
          
          //$harga_fasilitas=number_format($harga_fasilitas,0,",",".");
          
          
          echo "<tr style='color:black; background-color: white;'>
              <td>$tipe</td>
              <td>$merk</td>
              <td>$cpu</td>
              <td>$ram</td>
              <td>$hdd</td>
              <td>$ssd</td>
              <td>$vga</td>
              <td>$layar</td>
              <td>$harga</td>";
             echo' <td><img src="data:image/jpeg;base64,'.base64_encode( $image ).'" alt=""  height="140px" width="200px"  style="display: block; margin: auto;"></td>';
              echo ";<td>
                <a href='hapus-data.php?hapus_id=$tipe'><button type='button' class='btn btn-danger'>Hapus</button></a>
                
                
              </td>
              </tr>";
        }
      ?>
 
  </tbody>
</table>
          
        </div>
      </div>
    </section>
 
 

                  
                
  </body>
</html>