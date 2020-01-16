<?php
session_start();
require "koneksi.php"; 
$id_admin= $_GET['id_admin'];
$data = $db->query("SELECT * FROM tbl_admin WHERE id_admin = '$id_admin'")->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <title>Edit Admin</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>
  
  <div class="container">
  <div class="row">
      <div class="col-md-12 mb-5 mt-5">
  
      <h2>Edit Admin</h2>
<form action ="proses_edit_admin.php" method="POST">

<input type="hidden" name="id_admin" value="<?php echo $data['id_admin']; ?>" />

<div class="form-group">
  <label>Username</label>
  <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" />
</div>

<div class="form-group">
  <label>Password</label>
  <input type="text" name="password" class="form-control" value="<?php echo $data['password']; ?>" />
</div>

<div class="form-group">
  <label>Alamat</label>
  <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>" />
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
