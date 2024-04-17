<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$UserID = $_GET['UserID'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from user where UserID='$UserID'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#user");
 
?>