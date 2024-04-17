<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$KategoriID = $_POST['KategoriID'];
$NamaKategori = $_POST['NamaKategori'];
 
// menginput data ke database
mysqli_query($conn,"insert into kategoribuku values('$KategoriID','$NamaKategori')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#kategoribuku");
 
?>