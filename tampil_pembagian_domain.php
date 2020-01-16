<?php
session_start();
require "koneksi.php"; 
$data_pembagian_domain = $db->query("SELECT * FROM tbl_pembagian_domain")->fetchAll(PDO::FETCH_ASSOC); 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Tampil Pembagian Domain</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>
  
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5 mt-5">
        
<h2>Data Pembagian Domain</h2>
<a href="tambah_pembagian_domain.php" class='btn btn-primary'>Data baru +</a>
<table class="table table-bordered table-stripped">
	<tr>
		<th>No</th>
		<th>Kode Domain</th>
		<th>No Pembagian</th>
		<th>Keterangan</th>
	  <th>Aksi</th>
	</tr>
<?php
foreach($data_pembagian_domain as $no => $pembagian_domain)
{
	echo "
		<tr>
			<td>".($no+1)."</td>
			<td>".$pembagian_domain['kd_domain']."</td>
			<td>".$pembagian_domain['no_pembagian']."</td>
			<td>".$pembagian_domain['keterangan']."</td>
		  <td>
        <a href='edit_pembagian_domain.php?id_pembagian=".$pembagian_domain['id_pembagian']."' class='btn btn-primary'>Edit</a> 
        <a href='proses_hapus_pembagian_domain.php?id_pembagian=".$pembagian_domain['id_pembagian']."' class='btn btn-danger'>Hapus</a>
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
