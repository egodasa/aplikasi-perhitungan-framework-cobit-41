<?php
session_start();
require "koneksi.php"; 
$data_kuesioner = $db->query("Select
    tbl_domain.nm_domain,
    tbl_pertanyaan.kd_domain,
    tbl_pertanyaan.isi_pertanyaan,
    tbl_pertanyaan.id_pertanyaan
From
    tbl_domain Inner Join
    tbl_pertanyaan On tbl_domain.kd_domain = tbl_pertanyaan.kd_domain")->fetchAll(PDO::FETCH_ASSOC); 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Tampil Pertanyaan</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>
  
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5 mt-5">
        
<h2>Data Pertanyaan</h2>
<a href="tambah_pertanyaan.php" class='btn btn-primary'>Data baru +</a>
<table class="table table-bordered table-stripped">
	<tr>
		<th>No</th>
		<th>Kode Domain</th>
		<th>Isi Pertanyaan</th>
    <th>Aksi</th>
	
	</tr>
<?php
foreach($data_kuesioner as $no => $kuesioner)
{
	echo "
		<tr>
			<td>".($no+1)."</td>
			<td>".$kuesioner['kd_domain']."</td>
			<td>".$kuesioner['isi_pertanyaan']."</td>
		  <td>
        <a href='edit_pertanyaan.php?id_pertanyaan=".$kuesioner['id_pertanyaan']."' class='btn btn-primary'>Edit</a> 
        <a href='proses_hapus_pertanyaan.php?id_pertanyaan=".$kuesioner['id_pertanyaan']."' class='btn btn-danger'>Hapus</a>
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
