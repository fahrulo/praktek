<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$UlasanID = $_POST['UlasanID'];
$UserID = $_POST['UserID'];
$BukuID = $_POST['BukuID'];
$Ulasan = $_POST['Ulasan'];
$Rating = $_POST['Rating'];

// update data ke database
mysqli_query($conn,"update ulasanbuku set UserID='$UserID', BukuID='$BukuID', Ulasan='$Ulasan', Rating='$Rating' where UlasanID='$UlasanID'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#ulasanbuku");
 
?>