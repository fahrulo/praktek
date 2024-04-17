<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$KategoriID = $_GET['KategoriID'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from kategoribuku where KategoriID='$KategoriID'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#kategoribuku");
 
?>