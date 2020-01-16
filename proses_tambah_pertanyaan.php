<?php
session_start();
require "koneksi.php"; 

$kd_domain = $_POST['kd_domain'];
$isi_pertanyaan = $_POST['isi_pertanyaan'];
$db->query("insert into tbl_pertanyaan (kd_domain, isi_pertanyaan) values ('$kd_domain','$isi_pertanyaan')");
header("Location: tampil_pertanyaan.php");

?>
