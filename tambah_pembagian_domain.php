<?php
session_start();
require "koneksi.php"; 
$data_domain = $db->query("SELECT * FROM tbl_domain")->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Tambah Pembagian Domain</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>
  
  <div class="container">
		<div class="row">
        <div class="col-md-12 mb-5 mt-5">
<form action ="proses_tambah_pembagian_domain.php" method="POST">
	<h2>Data Pembagian Domain</h2>
	<hr>
<div class="form-group">
<label>Kode Domain</label>
<select name="kd_domain" class="form-control">
  <?php
    foreach($data_domain as $domain)
    {
      echo "<option value='".$domain['kd_domain']."'>".$domain['kd_domain']." - ".$domain['nm_domain']."</option>";
    }
  ?>
</select>
</div>

<div class="form-group">
<label>No Pembagian</label>
<input type="number" name ="no_pembagian" class="form-control" />
</div>

<div class="form-group">
<label>Keterangan</label>
<input type="text" name ="keterangan" class="form-control" />
</div>

<button class="btn btn-primary" type="submit">Simpan</button>
<button class="btn btn-danger" type="reset">Reset</button>

</form>
     
      
  </div>
    </div>
    </div>

  <?php // include 'components/footer.php' 
  ?>

  <?php include 'components/scripts.php' ?>

</body>

</html>
