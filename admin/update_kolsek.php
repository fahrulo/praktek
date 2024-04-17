<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$KoleksiID = $_POST['KoleksiID'];
$UserID = $_POST['UserID'];
$BukuID = $_POST['BukuID'];

// update data ke database
mysqli_query($conn,"update koleksipribadi set UserID='$UserID', BukuID='$BukuID' where KoleksiID='$KoleksiID'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#koleksipribadi");
 
?>