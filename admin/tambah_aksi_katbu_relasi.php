<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$KategoriBukuID = $_POST['KategoriBukuID'];
$BukuID = $_POST['BukuID'];
$KategoriID = $_POST['KategoriID'];
 
// menginput data ke database
mysqli_query($conn,"insert into kategoribuku_relasi values('$KategoriBukuID','$BukuID','$KategoriID')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#kategoribuku_relasi");
 
?>