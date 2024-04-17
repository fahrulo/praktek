<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$BukuID = $_POST['BukuID'];
$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$TahunTerbit = $_POST['TahunTerbit'];
 
// menginput data ke database
mysqli_query($conn,"insert into buku values('$BukuID','$Judul','$Penulis','$Penerbit','$TahunTerbit')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#buku");
 
?>