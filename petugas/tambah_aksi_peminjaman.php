<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$PeminjamanID = $_POST['PeminjamanID'];
$UserID = $_POST['UserID'];
$BukuID = $_POST['BukuID'];
$TanggalPeminjaman = $_POST['TanggalPeminjaman'];
$TanggalPengembalian = $_POST['TanggalPengembalian'];
$StatusPeminjaman = $_POST['StatusPeminjaman'];
 
// menginput data ke database
mysqli_query($conn,"insert into peminjaman values('$PeminjamanID','$UserID','$BukuID','$TanggalPeminjaman','$TanggalPengembalian','$StatusPeminjaman')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#Peminjaman");
 
?>