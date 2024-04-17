<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$BukuID = $_GET['BukuID'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from buku where BukuID='$BukuID'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#buku");
 
?>