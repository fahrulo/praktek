<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$PeminjamanID = $_GET['PeminjamanID'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from peminjaman where PeminjamanID='$PeminjamanID'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#Peminjaman");
 
?>