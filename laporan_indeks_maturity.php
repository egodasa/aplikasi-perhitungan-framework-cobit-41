<?php
session_start();
require "koneksi.php"; 
$data_laporan = $db->query("SELECT p.kd_domain, 
                              SUM(IF(p.bagian_responden = 'IT', p.total_pertanyaan, 0)) AS total_pertanyaan_it,
                              SUM(IF(p.bagian_responden = 'Pengguna', p.total_pertanyaan, 0)) AS total_pertanyaan_pengguna,
                              SUM(IF(p.bagian_responden = 'IT', p.total_kuesioner, 0)) AS total_kuesioner_it,
                              SUM(IF(p.bagian_responden = 'Pengguna', p.total_kuesioner, 0)) AS total_kuesioner_pengguna,
                              SUM(p.total_skor) AS total_skor
                              
                               FROM (Select
                               tbl_domain.no_urut,
                                  COUNT(DISTINCT tbl_pertanyaan.id_pertanyaan) AS total_pertanyaan,
                              COUNT(DISTINCT tbl_kuesioner.id_kuesioner) AS total_kuesioner,
                              SUM(tbl_jawaban_kuesioner.skor) AS total_skor,
                                  tbl_pertanyaan.kd_domain,
                              tbl_kuesioner.bagian_responden
                              From
                                  tbl_jawaban_kuesioner Inner Join
                                  tbl_pertanyaan On tbl_jawaban_kuesioner.id_pertanyaan = tbl_pertanyaan.id_pertanyaan Inner Join
                                  tbl_kuesioner On tbl_kuesioner.id_kuesioner = tbl_jawaban_kuesioner.id_kuesioner 
                                  JOIN tbl_domain ON tbl_pertanyaan.kd_domain = tbl_domain.kd_domain 
                              GROUP BY tbl_pertanyaan.kd_domain, tbl_kuesioner.bagian_responden) p GROUP BY p.kd_domain ORDER BY p.no_urut")->fetchAll(PDO::FETCH_ASSOC);
$banyak_data = count($data_laporan);
?>





<!DOCTYPE html>
<html lang="en">

<head>

  <title>Laporan Maturity Level</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>
  
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5 mt-5">
      <h2>LAPORAN MATURITY LEVEL</h2>
      <a href="cetak_laporan_indeks_maturity.php" class="btn btn-primary" target="_blank"><i class="fa fa-print"></i> Cetak</a>
      <table class="table table-bordered table-stripped text-center">
        <tr>
          <th rowspan="2">Proses</th>
          <th colspan="2">Total Pertanyaan</th>
          <th colspan="2">Jumlah Responden Kuesioner</th>
          <th colspan="2">Total Pertanyaan * Jumlah Responden Kuesioner</th>
          <th rowspan="2">Total Nilai Kuesioner</th>
          <th rowspan="2">Jumlah Nilai Jawaban</th>
          <th rowspan="2">Indeks</th>
        </tr>
        <tr>
          <th>Bagian IT</th>
          <th>Pengguna</th>
          <th>Bagian IT</th>
          <th>Pengguna</th>
          <th>Bagian IT</th>
          <th>Pengguna</th>
        </tr>
        
        <?php
          $total_indeks = 0;
          foreach($data_laporan as $no => $data)
          {
            $pertanyaan_x_responden_it = $data['total_pertanyaan_it'] * $data['total_kuesioner_it'];
            $pertanyaan_x_responden_pengguna = $data['total_pertanyaan_pengguna'] * $data['total_kuesioner_pengguna'];
            $total_nilai_kuesioner = $pertanyaan_x_responden_it + $pertanyaan_x_responden_pengguna;
            $indeks = number_format($data['total_skor']/$total_nilai_kuesioner, 2);
            $total_indeks += $indeks;
        ?>
          <tr>
            <td><?=$data['kd_domain']?></td>
            <td><?=$data['total_pertanyaan_it']?></td>
            <td><?=$data['total_pertanyaan_pengguna']?></td>
            <td><?=$data['total_kuesioner_it']?></td>
            <td><?=$data['total_kuesioner_pengguna']?></td>
            <td><?=$pertanyaan_x_responden_it?></td>
            <td><?=$pertanyaan_x_responden_pengguna?></td>
            <td><?=$total_nilai_kuesioner?></td>
            <td><?=$data['total_skor']?></td>
            <td><?=$indeks?></td>
          </tr>
        <?php
          }
        ?>
        
        <tr>
          <th colspan="9" style="text-align: center;">TOTAL</th>
          <th><?=$total_indeks?></th>
        </tr>
        <tr>
          <th colspan="9" style="text-align: center;">RATA-RATA INDEKS</th>
          <th><?=number_format($total_indeks/$banyak_data, 2)?></th>
        </tr>
      </table>
    </div>
  </div>
</div>

  
  

  <?php // include 'components/footer.php' 
  ?>

  <?php include 'components/scripts.php' ?>

</body>

</html>
