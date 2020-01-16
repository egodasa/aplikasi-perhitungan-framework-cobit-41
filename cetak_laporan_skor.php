<?php
session_start();
require "koneksi.php"; 

$kepala_tabel = array(
"PO8 1",
"PO8 2",
"AI4 3",
"AI4 4",
"DS1 5",
"DS1 6",
"DS2 7",
"DS2 8",
"DS3 9",
"DS3 10",
"DS4 11",
"DS4 12",
"DS7 13",
"DS7 14",
"DS8 15",
"DS8 16",
"DS10 17",
"DS10 18",
"DS13 19",
"DS13 20"
);

$total_skor_pertanyaan = array(
"PO8 1"=> 0,
"PO8 2"=> 0,
"AI4 3"=> 0,
"AI4 4"=> 0,
"DS1 5"=> 0,
"DS1 6"=> 0,
"DS2 7"=> 0,
"DS2 8"=> 0,
"DS3 9"=> 0,
"DS3 10"=> 0,
"DS4 11"=> 0,
"DS4 12"=> 0,
"DS7 13"=> 0,
"DS7 14"=> 0,
"DS8 15"=> 0,
"DS8 16"=> 0,
"DS10 17"=> 0,
"DS10 18"=> 0,
"DS13 19"=> 0,
"DS13 20" => 0
);

$total_skor_domain = array(
"PO8"=> 0,
"AI4"=> 0,
"DS1"=> 0,
"DS2"=> 0,
"DS3"=> 0,
"DS4"=> 0,
"DS7"=> 0,
"DS8"=> 0,
"DS10"=> 0,
"DS13" => 0
);

$data_kuisioner_keseluruhan = array();
$data_responden = $db->query("select * from tbl_kuesioner")->fetchAll(PDO::FETCH_ASSOC);


foreach($data_responden as $nomor => $res)
{
  
  $data_kuisioner = $db->query("Select
      tbl_pertanyaan.id_pertanyaan,
          tbl_jawaban_kuesioner.skor,
          tbl_pertanyaan.kd_domain,
          tbl_kuesioner.nm_responden 
      From
          tbl_jawaban_kuesioner Inner Join
          tbl_pertanyaan On tbl_jawaban_kuesioner.id_pertanyaan = tbl_pertanyaan.id_pertanyaan Inner Join
          tbl_kuesioner On tbl_jawaban_kuesioner.id_kuesioner = tbl_kuesioner.id_kuesioner 
          JOIN tbl_domain ON tbl_pertanyaan.kd_domain = tbl_domain.kd_domain 
           WHERE tbl_kuesioner.nm_responden = '".$res['nm_responden']."' ORDER BY tbl_domain.no_urut")->fetchAll(PDO::FETCH_ASSOC); 
  
  
  $data_tmp = array();
  foreach($data_kuisioner as $no => $kuisioner)
  {
    $data_tmp[$kuisioner['kd_domain']." ".($no+1)] = $kuisioner['skor'];
  }
  
  
  $data_kuisioner_keseluruhan[] = $data_tmp;
  
}

?>




<!DOCTYPE html>
<html lang="en">

<head>

  <title>Laporan Skor</title>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      margin: 0 auto;
      text-align: center;
      padding: 3px;
    }
    h1, h2, h3 {
      text-align: center;
    }
  </style>
</head>

<body>

<h2>LAPORAN SKOR KUESIONER</h2>
<table class="table table-bordered table-stripped">
	<tr>
    <td rowspan="2">No <br> Responden</td>
    <?php
      foreach($kepala_tabel as $k)
      {
        $kolom = explode(" ", $k);
    ?>
      <td><?=$kolom[0]?></td>
    <?php
      }
    ?>
  </tr>
	<tr>
    <?php
      foreach($kepala_tabel as $k)
      {
        $kolom = explode(" ", $k);
    ?>
      <td><?=$kolom[1]?></td>
    <?php
      }
    ?>
  </tr>
  
  <?php
  
    foreach($data_kuisioner_keseluruhan as $nomor => $data)
    {
      echo "<tr>";
      echo "<td>".($nomor+1)."</td>";
      foreach($kepala_tabel as $kp)
      {
        $domain = explode(" ", $kp);
        $total_skor_domain[$domain[0]] += $data[$kp];
        $total_skor_pertanyaan[$kp] += $data[$kp];
  ?>
        <td><?=$data[$kp]?></td>
  <?php
      }
      echo "</tr>";
    }
  
  ?>
  
  <tr>
    <th rowspan="2">JUMLAH TOTAL</th>
    <?php
      foreach($total_skor_pertanyaan as $d)
      {
        echo "<th>$d</th>";
      }
    ?>
  </tr>
  
  <tr>
    <?php
      foreach($total_skor_domain as $d)
      {
        echo "<th colspan='2'>$d</th>";
      }
    ?>
  </tr>
  
</table>

</body>

</html>
