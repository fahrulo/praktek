<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$KoleksiID = $_POST['KoleksiID'];
$UserID = $_POST['UserID'];
$BukuID = $_POST['BukuID'];
 
// menginput data ke database
mysqli_query($conn,"insert into koleksipribadi values('$KoleksiID','$UserID','$BukuID')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#koleksipribadi");
 
?>