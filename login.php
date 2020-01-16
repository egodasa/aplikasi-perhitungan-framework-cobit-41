<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Framework Cobit</title>
  <?php include 'components/head.php' ?>
</head>

<body>

  <!-- Navigation -->
  <?php include 'components/menu.php' ?>


  
  <div class="container">
    <div class="row">

        <div class="col-md-6 mb-5 mt-5">
            <h2>Login</h2>
            <hr>
            <form method="POST" action ="proses_login.php">
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Username</label>
                        <input name="username" type="text" class="form-control" autofocus="autofocus">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                </div>
                
                <button name="login" class="btn btn-success">Login</button>
            </form>
        </div>

    </div>
</div>
  

  <?php // include 'components/footer.php' 
  ?>

  <?php include 'components/scripts.php' ?>

</body>

</html>
