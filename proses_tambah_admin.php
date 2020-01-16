<?php
session_start();

require "koneksi.php"; 
$id_admin = $_POST['id_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];

$db->query("insert into tbl_admin (id_admin,username,password,alamat) values ('$id_admin','$username','$password','$alamat')");
header("Location: tampil_admin.php");
?>