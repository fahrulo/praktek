<!DOCTYPE html>
<html>

<head>
	<title>Edit Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<br />
	<br />
	<h3>EDIT DATA</h3>

	<?php
	include 'koneksi.php';
	$KoleksiID = $_GET['KoleksiID'];
	$data = mysqli_query($conn, "select * from koleksipribadi where KoleksiID ='$KoleksiID'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div class="kotak_login">
			<p class="tulisan_login">Edit Data</p>
			<form method="post" action="update_kolsek.php">
				<table>
					<tr>
						<td>User ID</td>
						<td>
							<input type="hidden" name="KoleksiID" value="<?php echo $d['KoleksiID']; ?>" class="form_login">
							<input type="text" name="UserID" value="<?php echo $d['UserID']; ?>" class="form_login">
						</td>
					</tr>
					<tr>
						<td>BukuID</td>
						<td>
							<input type="text" name="BukuID" value="<?php echo $d['BukuID']; ?>" class="form_login">
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="SIMPAN" class="tombol_login"></td>
					</tr>
				</table>
			</form>
		<?php
	}
		?>

</body>

</html>