<!DOCTYPE html>
<html>
<head>
	<title>Barang</title>
</head>
<body>
	<h3>Tambah Barang</h3>
 
	<br/>
	<a href="proses.php">KEMBALI</a>
	<br/>
	<form action="proses.php" method="POST">
		<table>
			<tr>
				<td>ID kebutuhan</td>
				<td>:</td>
				<td><div class="u-form-select-wrapper">
                <select id="select-decd" name="kebutuhan" class="u-border-2 u-border-black u-input u-input-rectangle u-radius-9 u-white">
                  <option value="Desain">Desain</option>
                  <option value="Sekolah">Sekolah</option>
                  <option value="Pengolahan Data">Pengolahan Data</option>
                  <option value="Akuntansi">Akuntansi</option>
                  <option value="Gaming">Gaming</option>
                  <option value="Editing">Editing</option>
                  <option value="programming">Programming</option>
                </select>
			</tr>
			
			<tr>
				<td>Status</td>
				<td>:</td>
				<td><select id="select-f46d" name="status" class="u-border-2 u-border-black u-input u-input-rectangle u-radius-9 u-white">
                  <option value="Siswa">Siswa</option>
                  <option value="Mahasiswa">Mahasisiwa</option>
                  <option value="Pekerja Kantoran">Pekerja Kantoran</option>
                  <option value="Enterpreneure">Enterpreneure</option>
                  <option value="Editor">Editor</option>
                  <option value="Photograper">Photograper</option>
                  <option value="Gamer">Gamer</option>
                  <option value="Developer">Developer</option>
                </select>
			</tr>
			
			<tr>
				<td>Harga</td>
				<td>:</td>
					
					<td>
						<input type="text" placeholder="" id="text-2294" name="harga" class="u-border-2 u-border-black u-input u-input-rectangle u-radius-9 u-white">

					</td>
					
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