<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<br/>
	<br/>
	<h3>TAMBAH DATA</h3>
	<div class="kotak_login">
			<p class="tulisan_login">Edit Data</p>
	<form method="post" action="register_aksi.php">
		<table>
			<tr>			
				<td></td>
				<td><input type="hidden" name="UserID"class="form_login"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="Username"class="form_login"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="Password"class="form_login"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="Email"class="form_login"></td>
			</tr>
			<tr>
				<td>NamaLengkap</td>
				<td><input type="text" name="NamaLengkap"class="form_login"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="Alamat"class="form_login"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><input type="text" name="level"class="form_login"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"class="form_login"></td>
			</tr>		
		</table>
	</form>
</body>
</html>