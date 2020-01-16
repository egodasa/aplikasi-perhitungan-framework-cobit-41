<?php
session_start();
require "koneksi.php"; 

$id_jawaban = $_POST['id_jawaban'];
$id_pertanyaan = $_POST['id_pertanyaan'];
$id_kuesioner = $_POST['id_kuesioner'];

$db->query("UPDATE tbl_jawaban_kuesioner SET id_pertanyaan ='$id_kuesioner' where id_jawaban = '$id_jawaban'");

?>