<?php
session_start();
require "koneksi.php"; 
$data_kuesioner = $db->query("SELECT * FROM tbl_kuesioner")->fetchAll(PDO::FETCH_ASSOC); 

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Tampil Kuesioner</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>
  
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5 mt-5">
        
<h2>Data Kuesioner</h2>
<a href="tambah_kuesioner.php" class='btn btn-primary'>Data baru +</a>
<table class="table table-bordered table-stripped">
	<tr>
		<th>No</th>
		<th>Nama Responden</th>
		<th>Usia Responden</th>
		<th>Jenis Kelamin Responden</th>
		<th>Bagian Responden</th>
		<th>Tanggal</th>
    <th>Aksi</th>
	</tr>
<?php
foreach($data_kuesioner as $no => $kuesioner)
{
	echo "
		<tr>
			<td>".($no+1)."</td>
			<td>".$kuesioner['nm_responden']."</td>
			<td>".$kuesioner['usia_responden']."</td>
			<td>".$kuesioner['jk_responden']."</td>
			<td>".$kuesioner['bagian_responden']."</td>
			<td>".$kuesioner['tanggal']."</td>
      <td>
        <a href='proses_hapus_kuesioner.php?id_kuesioner=".$kuesioner['id_kuesioner']."' class='btn btn-danger'>Hapus</a>
      </td>
		</tr>
	";
}
?>

</table>

 </div>
    </div>
  </div>

  
  

  <?php // include 'components/footer.php' 
  ?>

  <?php include 'components/scripts.php' ?>

</body>

</html>
