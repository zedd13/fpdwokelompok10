<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "olap_adventureworks";

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun dan Database tidak dapat dibuka");

if (!$conn) {
	die("<script>alert('Gagal tersambung dengan database')</script>");
}
