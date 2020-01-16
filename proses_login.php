<?php
session_start();
require "koneksi.php"; 
$username = $_POST['username'];
$password = $_POST['password'];
$cek_login = $db->query("SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'")->fetch(PDO::FETCH_ASSOC);
if(!empty($cek_login))
{
	$_SESSION = $cek_login;
	setcookie("pesan", "Anda berhasil login", time() + 1, "/");
	header("Location: index.php");
}
else
{
	setcookie("pesan", "Username atau password salah", time() + 1, "/");
	header("Location: login.php");
}
?>

