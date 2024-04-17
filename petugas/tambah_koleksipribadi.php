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
	<h3>TAMBAH DATA</h3>
	</center>
	<div class="kotak_login">
			<p class="tulisan_login">Tambah Data</p>
	<form method="post" action="tambah_aksi_kolsek.php">
		<table>
			<tr>			
				<td>Koleksi Id</td>
				<td><input type="text" name="KoleksiID" class="form_login"></td>
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
				<td></td>
				<td><input type="submit" value="SIMPAN" class="tombol_login"></td>
			</tr>		
		</table>
	</form>
	<a href="index.php#koleksipribadi">Kembali</a>
</body>
</html>