<!DOCTYPE html>
<html>
<head>
	<title>Digital Library</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center>
	<h3>TAMBAH DATA KATEGORI BUKU</h3>
	</center>
	<div class="kotak_login">
			<p class="tulisan_login">Tambah Data</p>
	<form method="post" action="tambah_aksi_katbu.php">
		<table>
			<tr>			
				<td>Kategori Id</td>
				<td><input type="text" name="KategoriID" class="form_login"></td>
			</tr>
			<tr>
				<td>NamaKategori</td>
				<td><input type="text" name="NamaKategori" class="form_login"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN" class="tombol_login"></td>
			</tr>		
		</table>
	</form>
	<a href="index.php#kategoribuku">Kembali</a>
</body>
</html>