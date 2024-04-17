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
 
// menginput data ke database
mysqli_query($conn,"insert into user values('$UserID','$Username','$Password','$Email','$NamaLengkap','$Alamat','$level')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php#user");
 
?>