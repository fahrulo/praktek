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
	<h3>TAMBAH DATA </h3>
	</center>
	<div class="kotak_login">
			<p class="tulisan_login">Tambah Data</p>
	<form method="post" action="tambah_aksi_peminjaman.php">
		<table>
			<tr>			
				<td>Peminjaman ID</td>
				<td><input type="text" name="PeminjamanID"class="form_login"></td>
			</tr>
			<tr>
				<td>UserID</td>
				<td><input type="text" name="UserID"class="form_login"></td>
			</tr>
			<tr>
				<td>BukuID</td>
				<td><input type="text" name="BukuID"class="form_login"></td>
			</tr>
			<tr>
				<td>TanggalPeminjaman</td>
				<td><input type="date" name="TanggalPeminjaman"class="form_login"></td>
			</tr>
			<tr>
				<td>TanggalPengembalian</td>
				<td><input type="date" name="TanggalPengembalian"class="form_login"></td>
			</tr>
			<tr>
				<td>StatusPeminjaman</td>
				<td><input type="text" name="StatusPeminjaman"class="form_login"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"class="tombol_login"></td>
			</tr>		
		</table>
		<a href="index.php#Peminjaman">Kembali</a>
	</form>
</body>
</html>