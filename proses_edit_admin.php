<?php
session_start();
require "koneksi.php"; 
$id_admin = $_POST['id_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];

$db->query("UPDATE tbl_admin SET username ='$username' where id_admin = '$id_admin'");
header("Location: tampil_admin.php");
?>