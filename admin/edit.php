<!DOCTYPE html>
<html>

<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<br />
	<center>
	<h2>EDIT DATA BUKU</h2>
	</center>
	<?php
	include 'koneksi.php';
	$BukuID = $_GET['BukuID'];
	$data = mysqli_query($conn, "select * from buku where BukuID='$BukuID'");
	while ($d = mysqli_fetch_array($data)) {
	?>
	<div class="kotak_login">
			<p class="tulisan_login">Edit Data</p>
		<form method="post" action="update.php">
			<table>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="BukuID" value="<?php echo $d['BukuID']; ?>"class="form_login">
					</td>
				</tr>
				<tr>
					<td>Judul</td>
					<td>
						<input type="text" name="Judul" value="<?php echo $d['Judul']; ?>"class="form_login">
					</td>
				</tr>
				<tr>
					<td>Penulis</td>
					<td><input type="text" name="Penulis" value="<?php echo $d['Penulis']; ?>"class="form_login"></td>
				</tr>
				<tr>
					<td>Penerbit</td>
					<td><input type="text" name="Penerbit" value="<?php echo $d['Penerbit']; ?>"class="form_login"></td>
				</tr>
				<tr>
					<td>TahunTerbit</td>
					<td><input type="date" name="TahunTerbit" value="<?php echo $d['TahunTerbit']; ?>"class="form_login"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" class="tombol_login"></td>
				</tr>
			</table>
			<a href="index.php#buku">Kembali</a>
		</form>
	<?php
	}
	?>

</body>

</html>