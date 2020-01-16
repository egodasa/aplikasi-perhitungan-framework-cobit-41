<?php
session_start();
unset($_SESSION['username']);
	setcookie("pesan", "Anda berhasil logout", time() + 1, "/");
	header("Location: index.php");
?>
