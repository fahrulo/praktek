<!DOCTYPE html>
<html>

<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<br />
	<br />
	<center>
	<h3>TAMBAH DATA </h3>
	</center>
	<div class="kotak_login">
		<p class="tulisan_login">Tambah Data</p>
		<form method="post" action="tambah_aksi_ulasanbuku.php">
			<table>
				<tr>
					<td>Ulasan ID</td>
					<td><input type="text" name="UlasanID" class="form_login"></td>
				</tr>
				<tr>
					<td>UserID</td>
					<td><input type="text" name="UserID" class="form_login"></td>
				</tr>
				<tr>
					<td>BukuID</td>
					<td><input type="text" name="BukuID" class="form_login"></td>
				</tr>
				<tr>
					<td>Ulasan</td>
					<td><input type="text" name="Ulasan" class="form_login"></td>
				</tr>
				<tr>
					<td>Rating</td>
					<td><input type="text" name="Rating" class="form_login"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" class="tombol_login"></td>
				</tr>
			</table>
			<a href="index.php#ulasanbuku">Kembali</a>
		</form>
</body>

</html>