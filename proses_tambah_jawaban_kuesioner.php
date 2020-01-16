<?php
session_start();
require "koneksi.php"; 

$id_pertanyaan = $_POST['id_pertanyaan'];
$id_kuesioner = $_POST['id_kuesioner'];
$skor = $_POST['skor'];
$db->query("insert into tbl_jawaban_kuesioner (id_pertanyaan,id_kuesioner,skor) values ('$id_pertanyaan','$id_kuesioner','$skor')");

?>