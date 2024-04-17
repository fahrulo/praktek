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

// update data ke database
mysqli_query($conn,"update peminjaman set UserID='$UserID', BukuID='$BukuID', TanggalPeminjaman='$TanggalPeminjaman', TanggalPengembalian='$TanggalPengembalian', StatusPeminjaman='$StatusPeminjaman' where PeminjamanID='$PeminjamanID'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#Peminjaman");
 
?>