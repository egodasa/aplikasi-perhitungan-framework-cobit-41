<!-- Bootstrap core JavaScript -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<?php
  if(isset($_COOKIE['pesan']))
  {
?>
    <script>
      alert("<?=$_COOKIE['pesan']?>");
    </script>
<?php
  }
?>
