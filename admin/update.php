<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$BukuID = $_POST['BukuID'];
$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];
 
// update data ke database
mysqli_query($conn,"update buku set Judul='$Judul', Penulis='$Penulis', Penerbit='$Penerbit', TahunTerbit='$TahunTerbit' where BukuID='$BukuID'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#buku");
 
?>