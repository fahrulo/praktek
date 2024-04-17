<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<br/>
	<br/>
	<center>
	<h3>TAMBAH DATA Kategori buku Relasi</h3>
	</center>
	<div class="kotak_login">
			<p class="tulisan_login">Tambah Data</p>
	<form method="post" action="tambah_aksi_katbu_relasi.php">
		<table>
			<tr>			
				<td>Kategori Buku Id</td>
				<td><input type="text" name="KategoriBukuID" class="form_login"></td>
			</tr>
			<tr>
				<td>BukuID</td>
				<td><input type="text" name="BukuID" class="form_login"></td>
			</tr>
			<tr>
				<td>KategoriID</td>
				<td><input type="text" name="KategoriID" class="form_login"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN" class="tombol_login"></td>
			</tr>		
		</table>
		<a href="index.php#kategoribuku_relasi">Kembali</a>
	</form>
</body>
</html>