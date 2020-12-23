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
      <div class="u-clearfix u-sheet u-sheet-1"><h3 style="color: black;"> Tambah Data </h3>
        <a  href="index2.php"><button type="button" class="btn btn-warning">Kembali</button></a>
        <a  href="index.php"><button type="button" class="btn btn-info">Beranda</button></a>
        <div class="u-container-style u-group u-shape-rectangle u-group-1">
 
	<br/>
	<br/>
	<form action="insert.php" method="POST" enctype="multipart/form-data">
		<table style="color: black; background-color: #eeeeee;">
			<tr>
				<td>Tipe Laptop</td>
				<td>:</td>
				<td><input type="text" name="tipe"></td>
			</tr>
			
			<tr>
				<td>Merk</td>
				<td>:</td>
				<td><input type="text" name="merk"></td>
			</tr>

			<tr>
				<td>CPU</td>
				<td>:</td>
				<td><input type="text" name="cpu"></td>
			</tr>
			
			<tr>
				<td><td>Tipe</td></td>
				<td>:</td>
					
					<td>
						<input type="radio" name="c_tipe" value="i3"/>i3
						<input type="radio" name="c_tipe" value="i5"/>i5
						<input type="radio" name="c_tipe" value="i7"/>i7
						<input type="radio" name="c_tipe" value="R5"/>R5
						<input type="radio" name="c_tipe" value="A10"/>A10
						<input type="radio" name="c_tipe" value="lain"/>Lainnya

					</td>
					
			</tr>

			<tr>
				<td><td>Generasi</td></td>
				<td>:</td>
					
					<td>
						<input type="text" name="c_generasi"></td>
					</td>	
			</tr>

			<tr>
				<td><td>Kecepatan Ghz</td></td>
				<td>:</td>
					
					<td>
						<input type="text" name="c_kecepatan"></td>
					</td>	
			</tr>
			
			<tr>
				<td>Ram</td>
				<td>:</td>
				<td><input type="text" name="ram"></td>
			</tr>
			<tr>
				<td><td>Kapasitas</td></td>
				<td>:</td>
					
					<td>
						<input type="radio" name="r_kapasitas" value="2"/>2GB
						<input type="radio" name="r_kapasitas" value="4"/>4GB
						<input type="radio" name="r_kapasitas" value="8"/>8GB
						<input type="radio" name="r_kapasitas" value="16"/>16GB
					</td>
					
			</tr>
			<tr>
				<td><td>DDR</td></td>
				<td>:</td>
					
					<td>
						<input type="radio" name="r_ddr" value="2"/>2
						<input type="radio" name="r_ddr" value="3"/>3
						<input type="radio" name="r_ddr" value="4"/>4
					</td>
					
			</tr>

			<tr>
				<td>Hardisk</td>
				<td>:</td>
				<td><input type="text" name="hdd"></td>
			</tr>

			<tr>
				<td>SSD</td>
				<td>:</td>
				<td><input type="text" name="ssd"></td>
			</tr>

			<tr>
				<td>Graphic Card</td>
				<td>:</td>
				<td><input type="text" name="vga"></td>
			</tr>
			<tr>
				<td><td>Merk</td></td>
				<td>:</td>
					
					<td>
						<input type="radio" name="v_merk" value="Nvidia"/>Nvidia
						<input type="radio" name="v_merk" value="AMD"/>AMD
						<input type="radio" name="v_merk" value="Intel"/>Intel
					</td>
					
			</tr>
			<tr>
				<td><td>DDR</td></td>
				<td>:</td>
				<td><input type="text" name="v_ddr"></td>
			</tr>
			<tr>
				<td><td>Kecepatan Mhz</td></td>
				<td>:</td>
				<td><input type="text" name="v_kecepatan"></td>
			</tr>
			<tr>
				<td><td>Kapasitas</td></td>
				<td>:</td>
					
					<td>
						<input type="radio" name="v_kapasitas" value="0"/>0GB
						<input type="radio" name="v_kapasitas" value="2"/>2GB
						<input type="radio" name="v_kapasitas" value="4"/>4GB
						<input type="radio" name="v_kapasitas" value="6"/>6GB
					</td>
			</tr>
			<tr>
				<td>Layar (Inchi)</td>
				<td>:</td>
				<td><input type="text" name="layar"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>: Rp</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td>: </td>
				<td><input type="file" name="image"></td>
			</tr>
			
		
				
				
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="kirim" value="SIMPAN">
					<input type="reset" name="clear" value="BATAL">
				</td>
			</tr>
		</table>
	</form>
 
</div>
      </div>
    </section>
 
 

                  
                
  </body>
</html>