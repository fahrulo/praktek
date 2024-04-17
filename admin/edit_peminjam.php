<!DOCTYPE html>
<html>

<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<br />
	<br />
	<center>
	<h3>EDIT DATA</h3>
	</center>
	<?php
	include 'koneksi.php';
	$PeminjamanID = $_GET['PeminjamanID'];
	$data = mysqli_query($conn, "select * from peminjaman where PeminjamanID ='$PeminjamanID'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div class="kotak_login">
			<p class="tulisan_login">Edit Data</p>
			<form method="post" action="update_peminjam.php">
				<table>
					<tr>
						<td>User ID</td>
						<td>
							<input type="hidden" name="PeminjamanID" value="<?php echo $d['PeminjamanID']; ?>" class="form_login">
							<input type="text" name="UserID" value="<?php echo $d['UserID']; ?>" class="form_login">
						</td>
					</tr>
					<tr>
						<td>Buku ID</td>
						<td>
							<input type="text" name="BukuID" value="<?php echo $d['BukuID']; ?>" class="form_login">
						</td>
					</tr>
					<tr>
						<td>TanggalPeminjaman</td>
						<td>
							<input type="date" name="TanggalPeminjaman" value="<?php echo $d['TanggalPeminjaman']; ?>" class="form_login">
						</td>
					</tr>
					<tr>
						<td>TanggalPengembalian</td>
						<td>
							<input type="date" name="TanggalPengembalian" value="<?php echo $d['TanggalPengembalian']; ?>" class="form_login">
						</td>
					</tr>
					<tr>
						<td>StatusPeminjaman</td>
						<td>
							<input type="text" name="StatusPeminjaman" value="<?php echo $d['StatusPeminjaman']; ?>" class="form_login">
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="SIMPAN" class="tombol_login"></td>
					</tr>
				</table>
				<a href="index.php#Peminjaman">Kembali</a>
			</form>
		<?php
	}
		?>

</body>

</html>