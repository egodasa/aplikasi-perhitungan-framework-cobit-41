<?php
session_start();
require "koneksi.php"; 
$id_pertanyaan = $_POST['id_pertanyaan'];
$kd_domain = $_POST['kd_domain'];
$isi_pertanyaan = $_POST['isi_pertanyaan'];

$db->query("UPDATE tbl_pertanyaan SET kd_domain ='$kd_domain', isi_pertanyaan = '$isi_pertanyaan' where id_pertanyaan = '$id_pertanyaan'");
header("Location: tampil_pertanyaan.php");

?>
