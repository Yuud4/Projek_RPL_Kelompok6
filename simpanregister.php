<?php
include 'config.php'; // config belum dibuat

// menyimpan data kedalam variabel
$nim            = $_POST['username'];
$nama           = $_POST['email'];
$jurusan        = $_POST['password'];
$jenis_kelamin  = $_POST['phone_number'];
$alamat         = $_POST['address'];

// query SQL untuk insert data
$query="INSERT INTO user SET username='$username',email='$email',password='$password',phone_number='$phone_number',address='$address'";
mysql_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.html");
?>