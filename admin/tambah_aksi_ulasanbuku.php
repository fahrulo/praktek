<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$PeminjamanID = $_POST['UlasanID'];
$UserID = $_POST['UserID'];
$BukuID = $_POST['BukuID'];
$Ulasan = $_POST['Ulasan'];
$Rating = $_POST['Rating'];
 
// menginput data ke database
mysqli_query($conn,"insert into ulasanbuku values('$PeminjamanID','$UserID','$BukuID','$Ulasan','$Rating')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#ulasanbuku");
 
?>