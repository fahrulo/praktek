<!DOCTYPE html>
<html>

<head>
	<title>Digital Library</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<br />
	<br />
	<center>
		<h3>TAMBAH DATA USER</h3>
	</center>
	<div class="kotak_login">
		<p class="tulisan_login">Tambah Data</p>
		<form method="post" action="tambah_aksi_user.php">
			<table>
				<tr>
					<td>User ID</td>
					<td><input type="text" name="UserID" class="form_login"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="Username" class="form_login"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="Password" class="form_login"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="Email" class="form_login"></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td><input type="text" name="NamaLengkap" class="form_login"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="Alamat" class="form_login"></td>
				</tr>
				<tr>
					<td>Level</td>
					<td><input type="text" name="level" class="form_login"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN" class="tombol_login"></td>
				</tr>
			</table>
			<a href="index.php#user">Kembali</a>
		</form>
</body>

</html>