<?php 
ob_start();
session_start();
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['user'];
$password = $_POST['pass'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' AND password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else{
	header("location:login.php?pesan=gagal");
}
