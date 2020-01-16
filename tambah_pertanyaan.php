<?php
session_start();
require "koneksi.php"; 
$data_domain = $db->query("Select * FROM tbl_domain")->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <title>Tambah Pertanyaan</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>
  
  <div class="container">
		<div class="row">
        <div class="col-md-12 mb-5 mt-5">
<form action ="proses_tambah_pertanyaan.php" method="POST">
	<h2>Data Pertanyaan</h2>
	<hr>
<div class="form-group">
<label>Domain</label>
<select name="kd_domain" class="form-control">
  <?php
    foreach($data_domain as $domain)
    {
      echo "<option value='".$domain['kd_domain']."'>".$domain['kd_domain']." ".$domain['nm_domain']."</option>";
    }
  ?>
</select>
</div>

<div class="form-group">
<label>Isi Pertanyaan</label>
<textarea name="isi_pertanyaan" class="form-control">
</textarea>
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

