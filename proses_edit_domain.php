<?php
session_start();
require "koneksi.php"; 
$kd_domain = $_POST['kd_domain'];
$nm_domain = $_POST['nm_domain'];

$db->query("UPDATE tbl_domain SET nm_domain ='$nm_domain' where kd_domain = '$kd_domain'");
header("Location: tampil_domain.php");
?>