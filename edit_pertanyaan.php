<?php
session_start();
require "koneksi.php"; 
$data_domain = $db->query("Select * from tbl_domain")->fetchAll(PDO::FETCH_ASSOC);
$id_pertanyaan = $_GET['id_pertanyaan'];

$data = $db->query("SELECT * FROM tbl_pertanyaan WHERE id_pertanyaan = ".$id_pertanyaan)->fetch(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <title>Edit Pertanyaan</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>
  
  <div class="container">
  
    <div class="row">
      <div class="col-md-12 mb-5 mt-5">
  
      <h2>Edit Pertanyaan</h2>
<form action ="proses_edit_pertanyaan.php" method="POST">

<input type="hidden" name="id_pertanyaan" value="<?=$id_pertanyaan?>" />

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
<script>
  document.getElementsByName('kd_domain')[0].value = "<?=$data['kd_domain']?>";
</script>
</div>

<div class="form-group">
<label>Isi Pertanyaan</label>
<textarea name="isi_pertanyaan" class="form-control">
  <?=$data['isi_pertanyaan']?>
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
