<?php
session_start();
require "koneksi.php"; 
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

        <div class="col-md-12 mb-5 mt-5">

<form action ="proses_tambah_kuesioner.php" method="POST">


<h2>Data Responden</h2>
<hr>

<div class="form-group">
<label>Nama Responden</label>
<input type="text" name="nm_responden" class="form-control" />
</div>

<div class="form-group">
<label>Usia Responden</label>
<select name="usia_responden" class="form-control">
	<option value="20-30 Tahun">20-30 Tahun</option>
	<option value="31-40 Tahun">31-40 Tahun</option>
	<option value=">40 tahun">>40 Tahun</option>
</select>
</div>

<div class="form-group">
<label>Jenis Kelamin Responden</label>
<select name="jk_responden" class="form-control">
	<option value="Laki-laki">Laki-laki</option>
	<option value="Perempuan">Perempuan</option>
</select>
</div>

<div class="form-group">
<label>Bagian Responden</label>
<input type="text" name ="bagian_responden" class="form-control" />
</div>

<br>
<br>
<h2>Daftar Pertanyaan</h2>
<hr>
<?php
                      $data_domain = $db->query("Select
                                                      tbl_domain.nm_domain,
                                                      tbl_domain.kd_domain,
                                                      tbl_pembagian_domain.no_pembagian,
                                                      tbl_pembagian_domain.keterangan,
                                                      tbl_pembagian_domain.id_pembagian
                                                  From
                                                      tbl_pembagian_domain Inner Join
                                                      tbl_domain On tbl_pembagian_domain.kd_domain = tbl_domain.kd_domain ORDER BY tbl_domain.kd_domain, tbl_pembagian_domain.no_pembagian")->fetchAll(PDO::FETCH_ASSOC);
                      
                                                    
                      foreach($data_domain as $kat)
                      {
                    ?>
                        <b><?=$kat['kd_domain'].$kat['no_pembagian']." ".$kat['keterangan']?></b>
                        <table class="table table-bordered table-stripped">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>PERNYATAAN</th>
                              <th>TS/TB</th>
                              <th>KS/KB</th>
                              <th>CS/CB</th>
                              <th>S/B</th>
                              <th>SS/SB</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              $data_pernyataan = $db->query("Select
                                                                  tbl_domain.nm_domain,
                                                                  tbl_domain.kd_domain,
                                                                  tbl_pembagian_domain.no_pembagian,
                                                                  tbl_pembagian_domain.keterangan,
                                                                  tbl_pembagian_domain.id_pembagian,
                                                                  tbl_pertanyaan.isi_pertanyaan,
                                                                  tbl_pertanyaan.id_pertanyaan
                                                              From
                                                                  tbl_pembagian_domain Inner Join
                                                                  tbl_domain On tbl_pembagian_domain.kd_domain = tbl_domain.kd_domain Inner Join
                                                                  tbl_pertanyaan On tbl_pertanyaan.id_pembagian = tbl_pembagian_domain.id_pembagian 
                                                                  WHERE tbl_domain.kd_domain = '".$kat['kd_domain']."' AND tbl_pembagian_domain.no_pembagian = '".$kat['no_pembagian']."'
                                                                  ORDER BY tbl_domain.kd_domain, tbl_pembagian_domain.no_pembagian")->fetchAll(PDO::FETCH_ASSOC);
                              foreach($data_pernyataan as $no => $pet)
                              {
                            ?>
                              <tr>
                                <td><?=$no+1?></td>
                                <td width="700">
                                  <input type="hidden" name="id_pertanyaan[]" value="<?=$pet['id_pertanyaan']?>" />
                                  <?=$pet['isi_pertanyaan']?>
                                </td>
                                <td>
                                  <input type="radio" name="skor<?=$pet['id_pertanyaan']?>" value="5" />
                                </td>
                                <td>
                                  <input type="radio" name="skor<?=$pet['id_pertanyaan']?>" value="4" />
                                </td>
                                <td>
                                  <input type="radio" name="skor<?=$pet['id_pertanyaan']?>" value="3" />
                                </td>
                                <td>
                                  <input type="radio" name="skor<?=$pet['id_pertanyaan']?>" value="2" />
                                </td>
                                <td>
                                  <input type="radio" name="skor<?=$pet['id_pertanyaan']?>" value="1" />  
                                </td>
                              </tr>
                            <?php
                              }
                            ?>
                          </tbody>
                        </table>
                        <br>
                        <br>
                    <?php
                      }
                    ?>


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
