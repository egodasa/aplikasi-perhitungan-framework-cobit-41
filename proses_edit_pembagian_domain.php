<?php
session_start();
require "koneksi.php"; 

$id_pembagian = $_POST['id_pembagian'];
$kd_domain = $_POST['kd_domain'];
$no_pembagian = $_POST['no_pembagian'];
$keterangan = $_POST['keterangan'];

$db->query("UPDATE tbl_pembagian_domain SET kd_domain ='$kd_domain', no_pembagian = '$no_pembagian', keterangan = '$keterangan' where id_pembagian = '$id_pembagian'");
header("Location: tampil_pembagian_domain.php");

?>
