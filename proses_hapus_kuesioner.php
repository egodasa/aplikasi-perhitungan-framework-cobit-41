<?php
session_start();
require "koneksi.php"; 
$id_kuesioner= $_GET['id_kuesioner'];

$db->query("delete from tbl_kuesioner where id_kuesioner ='$id_kuesioner'");
header("Location: tampil_kuesioner.php");

?>
