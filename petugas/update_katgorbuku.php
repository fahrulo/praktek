<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$KategoriBukuID = $_POST['KategoriBukuID'];
$BukuID = $_POST['BukuID'];
$KategoriID = $_POST['KategoriID'];
 
// update data ke database
mysqli_query($conn,"update KategoriBuku_relasi set BukuID='$BukuID', KategoriID='$KategoriID' where KategoriBukuID='$KategoriBukuID'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#kategoribuku_relasi");
 
?>