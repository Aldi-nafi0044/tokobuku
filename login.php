<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data_email = mysqli_query($koneksi,"select * from user where email='$email'");
$data_password = mysqli_query($koneksi,"select * from user where password='$password'");
// menghitung jumlah data yang ditemukan
$cek_email = mysqli_num_rows($data_email);
$cek_password = mysqli_num_rows($data_password);
 
if($cek_email && $cek_password){
	header("location:index_menu.php");
}else if(!$cek_email && $cek_password){
	header("location:index.php?pesan=emailsalah");
}else if($cek_email && !$cek_password){
	header("location:index.php?pesan=passsalah");
}else if(!$cek_email && !$cek_password){
	header("location:index.php?pesan=2salah");
}
?>
