<!DOCTYPE html>
<html>
<head>
	<title>Digital Librabry</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center>
	<h3>EDIT DATA</h3>
	</center>
	<?php
	include 'koneksi.php';
	$KategoriID = $_GET['KategoriID'];
	$data = mysqli_query($conn,"select * from kategoribuku where KategoriID ='$KategoriID '");
	while($d = mysqli_fetch_array($data)){
		?>
		<div class="kotak_login">
			<p class="tulisan_login">Tambah Data</p>
		<form method="post" action="update_katbu.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="KategoriID" value="<?php echo $d['KategoriID']; ?>" class="form_login">
						<input type="text" name="NamaKategori" value="<?php echo $d['NamaKategori']; ?>"class="form_login">
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
 <a href="index.php#kategoribuku">Kembali</a>
</body>
</html>