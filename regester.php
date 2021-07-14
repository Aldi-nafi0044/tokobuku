<?php
include './config.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

if ($password == $confirm ){
    mysqli_query($koneksi, "insert into user values('','$nama','$email','$password','$confirm')");
    header("location:index.php?pesan=berhasil");
}  
else {
	header("location:index.php?pesan=gagal");
}  
?>
