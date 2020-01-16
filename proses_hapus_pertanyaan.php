<?php
session_start();
require "koneksi.php"; 
$id_pertanyaan = $_GET['id_pertanyaan'];


$db->query("delete from tbl_pertanyaan where id_pertanyaan ='$id_pertanyaan'");
header("Location: tampil_pertanyaan.php");

?>
