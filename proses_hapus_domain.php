<?php
session_start();
require "koneksi.php"; 
$kd_domain = $_GET['kd_domain'];


$db->query("delete from tbl_domain where kd_domain ='$kd_domain'");
header("Location: tampil_domain.php");
?>
