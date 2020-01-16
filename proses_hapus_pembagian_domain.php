<?php
session_start();
require "koneksi.php"; 
$id_pembagian = $_GET['id_pembagian'];


$db->query("delete from tbl_pembagian_domain where id_pembagian ='$id_pembagian'");
header("Location: tampil_pembagian_domain.php");

?>
