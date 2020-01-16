<?php
session_start();
require "koneksi.php"; 
$nm_responden = $_POST['nm_responden'];
$usia_responden = $_POST['usia_responden'];
$jk_responden = $_POST['jk_responden'];
$bagian_responden = $_POST['bagian_responden'];
$tanggal = date("Y-m-d");

$db->query("insert into tbl_kuesioner (nm_responden,usia_responden,jk_responden,bagian_responden,tanggal)
 values ('$nm_responden','$usia_responden','$jk_responden','$bagian_responden','$tanggal')");

$id_kuesioner = $db->id();

$data_pernyataan = $_POST['id_pertanyaan'];

foreach($data_pernyataan as $no => $pet)
{
  $skor = "skor".$pet;
  $db->query("INSERT INTO tbl_jawaban_kuesioner (id_pertanyaan, id_kuesioner, skor) VALUES ('$pet', '$id_kuesioner', '".$_POST[$skor]."')");
}

setcookie("pesan", "Data kuesioner berhasil disimpan. Terima kasih...", time() + 1, "/");

header("Location: index.php");

?>
