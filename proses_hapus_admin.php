<?php
session_start();
require "koneksi.php"; 
$id_admin = $_GET['id_admin'];


$db->query("delete from tbl_admin where id_admin ='$id_admin'");
header("Location: tampil_admin.php");
?>
