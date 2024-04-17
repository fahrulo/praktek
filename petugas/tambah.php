<!DOCTYPE html>
<html>
<head>
	<title>Digital Library</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<br/>
	<br/>
	<br/>
	<center>
	<h3>TAMBAH DATA BUKU</h3>
	</center>
	<div class="kotak_login">
			<p class="tulisan_login">Tambah Data</p>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Buku ID</td>
				<td><input type="text" name="BukuID" class="form_login"></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td><input type="text" name="Judul" class="form_login"></td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td><input type="text" name="Penulis" class="form_login"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td><input type="text" name="Penerbit" class="form_login"></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td><input type="text" name="TahunTerbit" class="form_login"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="TAMBAH" class="tombol_login"></td>
			</tr>		
		</table>
	</form>
</body>
<a href="index.php#buku">Kembali</a>
</html>