<?php
session_start();
require "koneksi.php"; 
$data_domain = $db->query("SELECT * FROM tbl_domain")->fetchAll(PDO::FETCH_ASSOC); 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Tampil Domain</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>
  
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5 mt-5">
	  
<h2>Data Domain</h2>
<a href="tambah_domain.php" class='btn btn-primary'>Data baru +</a>
<table class="table table-bordered table-stripped">
	<tr>
		<th>No</th>
		<th>Kode Domain</th>
		<th>Nama Domain</th>
    <th>Aksi</th>
	</tr>
<?php
foreach($data_domain as $no => $domain)
{
	echo "
		<tr>
			<td>".($no+1)."</td>
			<td>".$domain['kd_domain']."</td>
			<td>".$domain['nm_domain']."</td>
      <td>
        <a href='edit_domain.php?kd_domain=".$domain['kd_domain']."' class='btn btn-primary'>Edit</a> 
        <a href='proses_hapus_domain.php?kd_domain=".$domain['kd_domain']."' class='btn btn-danger'>Hapus</a>
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