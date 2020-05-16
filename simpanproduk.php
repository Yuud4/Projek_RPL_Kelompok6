<?php
///membuat koneksi ke database
$server="localhost"; ///nama server
$user="root"; ///nama username mysql
$Password=NULL;
$database="REGROW"; ///nama database yang dipilih

$con=mysqli_connect($server, $user, $Password) or die ("Koneksi Gagal"); ///koneksi ke database
mysqli_select_db($con,$database) or die ("Database tidak tersedia"); ///memilih database, dan menampilkan pesan jika gagal
///mengambil data dari form
$file = $_FILES['attachments[]'];
$nama = $_POST['name'];
$deskripsi = $_POST['Description'];
$harga = $_POST['price'];

///input ke tabel pengguna
$input=mysqli_query($con, "INSERT INTO produk (Kode_Produk, Nama_Produk, Deskripsi_Produk, Foto_Produk, Harga_Produk) VALUES (' ', '$nama', '$deskripsi', '$file', '$harga')");
///cek sudah terinput atau belum
if(!$input) ///jika gagal
{
header('Location: sell.html?input_gagal');
}
else ///jika sukses
{
	header('Location: index.html?input_berhasil');
}
?>