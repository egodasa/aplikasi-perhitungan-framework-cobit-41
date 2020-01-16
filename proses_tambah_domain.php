<?php
session_start();

require "koneksi.php"; 
$kd_domain = $_POST['kd_domain'];
$nm_domain = $_POST['nm_domain'];

$db->query("insert into tbl_domain (kd_domain,nm_domain) values ('$kd_domain','$nm_domain')");
header("Location: tampil_domain.php");
?>