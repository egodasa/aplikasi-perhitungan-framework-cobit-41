<?php
session_start();
require "koneksi.php"; 
$data_admin = $db->query("SELECT * FROM tbl_admin")->fetchAll(PDO::FETCH_ASSOC); 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Tampil Admin</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>
  
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-5 mt-5">
	  
<h2>Data Admin</h2>
<a href="tambah_admin.php" class='btn btn-primary'>Data baru +</a>
<table class="table table-bordered table-stripped">
	<tr>
		<th>No</th>
		<th>Id Admin</th>
		<th>Username</th>
		<th>Alamat</th>
		
		
    <th>Aksi</th>
	</tr>
<?php
foreach($data_admin as $no => $domain)
{
	echo "
		<tr>
			<td>".($no+1)."</td>
			<td>".$domain['id_admin']."</td>
			<td>".$domain['username']."</td>
			<td>".$domain['alamat']."</td>
      <td>
        <a href='edit_admin.php?id_admin=".$domain['id_admin']."' class='btn btn-primary'>Edit</a> 
        <a href='proses_hapus_admin.php?id_admin=".$domain['id_admin']."' class='btn btn-danger'>Hapus</a>
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