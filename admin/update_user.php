<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$UserID = $_POST['UserID'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];
$level = $_POST['level'];

// update data ke database
mysqli_query($conn,"update user set Username='$Username', Password='$Password', Email='$Email', NamaLengkap='$NamaLengkap', Alamat='$Alamat', level='$level' where UserID='$UserID'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#user");
 
?>