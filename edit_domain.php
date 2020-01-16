<?php
session_start();
require "koneksi.php"; 
$kd_domain= $_GET['kd_domain'];
$data = $db->query("SELECT * FROM tbl_domain WHERE kd_domain = '$kd_domain'")->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <title>Edit Domain</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>
  
  <div class="container">
  <div class="row">
      <div class="col-md-12 mb-5 mt-5">
  
      <h2>Edit Domain</h2>
<form action ="proses_edit_domain.php" method="POST">

<input type="hidden" name="kd_domain" value="<?php echo $data['kd_domain']; ?>" />

<div class="form-group">
  <label>Nama Domain</label>
  <input type="text" name="nm_domain" class="form-control" value="<?php echo $data['nm_domain']; ?>" />
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
