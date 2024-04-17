<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$KategoriID = $_POST['KategoriID'];
$NamaKategori = $_POST['NamaKategori'];
 
// update data ke database
mysqli_query($conn,"update kategoribuku set NamaKategori='$NamaKategori' where KategoriID='$KategoriID'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#kategoribuku");
 
?>