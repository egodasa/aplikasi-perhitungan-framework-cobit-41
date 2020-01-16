<?php
session_start();
require "koneksi.php"; 
$id_jawaban = $_GET['id_jawaban'];


$db->query("delete from tbl_jawaban_kuesioner where id_jawaban ='$id_jawaban'");

?>