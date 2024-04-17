<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$KategoriBukuID = $_GET['KategoriBukuID'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from kategoribuku_relasi where KategoriBukuID='$KategoriBukuID'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#kategoribuku_relasi");
 
?>