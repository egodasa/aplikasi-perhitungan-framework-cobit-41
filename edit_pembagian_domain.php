<?php
session_start();

require "koneksi.php"; 
$id_pembagian = $_GET['id_pembagian'];
$data_domain = $db->query("SELECT * FROM tbl_domain")->fetchAll(PDO::FETCH_ASSOC);
$data = $db->query("SELECT * FROM tbl_pembagian_domain WHERE id_pembagian = ".$id_pembagian)->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <title>Edit Pembagian Domain</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>
  
  <div class="container">
  
     <div class="row">
      <div class="col-md-12 mb-5 mt-5">
  
      <h2>Edit Pembagian Domain</h2>
<form action ="proses_edit_pembagian_domain.php" method="POST">

<input type="hidden" name="id_pembagian" value="<?=$id_pembagian?>" />

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
  <script>
   document.getElementsByName("kd_domain")[0].value = "<?=$data['kd_domain']?>";
  </script>
</div>

<div class="form-group">
  <label>No Pembagian</label>
  <input type="number" name="no_pembagian" class="form-control" value="<?=$data['no_pembagian']?>" />
</div>

<div class="form-group">
  <label>Keterangan</label>
  <input type="text" name ="keterangan" class="form-control" value="<?=$data['keterangan']?>" />
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
