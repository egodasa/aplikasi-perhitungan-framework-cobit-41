<?php
session_start();
require "koneksi.php"; 
$data = $db->query("  Select tbl_domain.*,
    AVG(tbl_jawaban_kuesioner.skor) AS rata_rata_skor,
ROUND(AVG(tbl_jawaban_kuesioner.skor)) AS skala,
4 as target,
4 - AVG(tbl_jawaban_kuesioner.skor) AS gap 

From
    tbl_domain Inner Join
    tbl_pertanyaan On tbl_domain.kd_domain = tbl_pertanyaan.kd_domain Inner Join
    tbl_jawaban_kuesioner On tbl_jawaban_kuesioner.id_pertanyaan = tbl_pertanyaan.id_pertanyaan Inner Join
    tbl_kuesioner On tbl_jawaban_kuesioner.id_kuesioner = tbl_kuesioner.id_kuesioner 
GROUP BY tbl_domain.kd_domain
ORDER BY tbl_domain.no_urut")->fetchAll(PDO::FETCH_ASSOC); 
?>



<!DOCTYPE html>
<html lang="en">

<head>

  <title>Laporan Perbandingan</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>
  
  <div class="container">
    <div class="row">

        <div class="col-md-12 mb-5 mt-5">
<h2>LAPORAN PERBANDINGAN MATURITY LEVEL ANTAR RESPONDEN</h2>
<a href="cetak_laporan_perhitungan.php" class="btn btn-primary" target="_blank"><i class="fa fa-print"></i> Cetak</a>
<table class="table table-bordered table-stripped">
	<tr>
		<th>Domain</th>
		<th>Keterangan</th>
    <th>Rata-rata</th>
    <th>Skala</th>
    <th>Target</th>
    <th>Gap</th>
	</tr>
<?php
$banyak_data = count($data);
$total_rata = 0;
$total_skala = 0;
$total_target = 0;
$total_gap = 0;
foreach($data as $no => $d)
{
  $total_rata += $d['rata_rata_skor'];
  $total_skala += $d['skala'];
  $total_target += $d['target'];
  $total_gap += $d['gap']; 
	echo "
		<tr>
			<td>".$d['kd_domain']."</td>
			<td>".$d['nm_domain']."</td>
			<td>".number_format($d['rata_rata_skor'],2)."</td>
			<td>".number_format($d['skala'],2)."</td>
			<td>".number_format($d['target'],2)."</td>
			<td>".number_format($d['gap'],2)."</td>
		</tr>
	";
}

$rata_rata_skor = $total_rata/$banyak_data;
$rata_rata_skala = $total_skala/$banyak_data;
$rata_rata_target = $total_target/$banyak_data;
$rata_rata_gap = $total_gap/$banyak_data;

?>
<tr>
  <td colspan="2">
    Total
  </td>
  <td>
    <?php echo number_format($total_rata, 2); ?>
  </td>
  <td>
    <?php echo number_format($total_skala, 2); ?>
  </td>
  <td>
    <?php echo number_format($total_target, 2); ?>
  </td>
  <td>
    <?php echo number_format($total_gap, 2); ?>
  </td>
</tr>
<tr>
  <td colspan="2">
    RATA-RATA
  </td>
  <td>
    <?php echo number_format($rata_rata_skor, 2); ?>
  </td>
  <td>
    <?php echo number_format($rata_rata_skala, 2); ?>
  </td>
  <td>
    <?php echo number_format($rata_rata_target, 2); ?>
  </td>
  <td>
    <?php echo number_format($rata_rata_gap, 2); ?>
  </td>
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
