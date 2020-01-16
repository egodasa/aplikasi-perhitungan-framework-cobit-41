<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #5dcbf5!important;">
    <div class="container">
        <a class="navbar-brand" href="index.php">
		<img src="logo_pdam.png" height="30" />
		PDAM Tirta Alami Tanah Datar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" >Home</a>
                </li>
               
                
                <?php
                if (empty($_SESSION['username'])) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Login</span></a>
                    </li>
					 <li class="nav-item">
                    <a class="nav-link" href="isi_kuesioner.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Isi Kuesioner</span></a>
                </li>
                <?php } else { ?>
					<li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kelola Data
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="tampil_domain.php">Domain</a>
                    <a class="dropdown-item" href="tampil_pertanyaan.php">Pertanyaan</a>
                    <a class="dropdown-item" href="tampil_kuesioner.php">kuesioner</a>
					<a class="dropdown-item" href="tampil_admin.php">Admin</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Laporan
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="laporan_perhitungan.php">Perbandingan</a>
                    <a class="dropdown-item" href="laporan_skor.php">Skor</a>
                    <a class="dropdown-item" href="laporan_indeks_maturity.php">Maturity Level</a>
                  </div>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fas fa-fw fa-chart-area"></i>
                            <span>Logout</span></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
