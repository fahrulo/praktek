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
	$UserID = $_GET['UserID'];
	$data = mysqli_query($conn, "select * from user where UserID ='$UserID'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div class="kotak_login">
			<p class="tulisan_login">Edit Data</p>
			<form method="post" action="update_user.php">
				<tr>
					<td>Username</td>
					<td>
						<input type="hidden" name="UserID" value="<?php echo $d['UserID']; ?>" class="form_login">
						<input type="text" name="Username" value="<?php echo $d['Username']; ?>" class="form_login">
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="text" name="Password" value="<?php echo $d['Password']; ?>" class="form_login">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<input type="text" name="Email" value="<?php echo $d['Email']; ?>" class="form_login">
					</td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>
						<input type="text" name="NamaLengkap" value="<?php echo $d['NamaLengkap']; ?>" class="form_login">
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>
						<input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>" class="form_login">
					</td>
				</tr>
				<tr>
					<td>Level</td>
					<td>
						<input type="text" name="level" value="<?php echo $d['level']; ?>" class="form_login">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" class="tombol_login"></td>
				</tr>
				</table>
				<br></br>
				<a href="index.php#user">Kembali</a>
			</form>
		<?php
	}
		?>

</body>

</html>