<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Tambah Admin</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>
  
  <div class="container">
	<div class="row">
        <div class="col-md-12 mb-5 mt-5">
<form action ="proses_tambah_admin.php" method="POST">
<h2>Data Admin</h2>
<hr>
<div class="form-group">
<label>Username</label>
<input type="text" name ="username" class="form-control" />
</div>

<div class="form-group">
<label>password</label>
<input type="text" name ="password" class="form-control" />
</div>

<div class="form-group">
<label>Alamat</label>
<input type="text" name ="alamat" class="form-control" />
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
