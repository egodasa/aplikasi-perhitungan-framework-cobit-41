<?php
session_start();
require "koneksi.php"; 

$kd_domain = $_POST['kd_domain'];
$no_pembagian = $_POST['no_pembagian'];
$keterangan = $_POST['keterangan'];

$db->query("insert into tbl_pembagian_domain (kd_domain,no_pembagian,keterangan) values ('$kd_domain','$no_pembagian','$keterangan')");
header("Location: tampil_pembagian_domain.php");


?>
