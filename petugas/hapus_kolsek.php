<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$KoleksiID = $_GET['KoleksiID'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from koleksipribadi where KoleksiID='$KoleksiID'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#koleksipribadi");
 
?>