<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Laptop</title>
</head>
<body>
	<h3>Tambah Data</h3>
 
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<form action="insert.php" method="POST" enctype="multipart/form-data">
		<table>
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
 
</body>
</html>