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
	$UlasanID = $_GET['UlasanID'];
	$data = mysqli_query($conn, "select * from ulasanbuku where UlasanID ='$UlasanID'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div class="kotak_login">
			<p class="tulisan_login">Edit Data</p>
			<form method="post" action="update_ulasanbuku.php">
				<table>
					<tr>
						<td>User ID</td>
						<td>
							<input type="hidden" name="UlasanID" value="<?php echo $d['UlasanID']; ?>" class="form_login">
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
						<td>Ulasan</td>
						<td>
							<input type="text" name="Ulasan" value="<?php echo $d['Ulasan']; ?>" class="form_login">
						</td>
					</tr>
					<tr>
						<td>Rating</td>
						<td>
							<input type="text" name="Rating" value="<?php echo $d['Rating']; ?>" class="form_login">
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="SIMPAN" class="tombol_login"></td>
					</tr>
				</table>
				<a href="index.php#ulasanbuku">Kembali</a>
			</form>
		<?php
	}
		?>

</body>

</html>