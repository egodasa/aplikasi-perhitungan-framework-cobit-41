<?php
if (isset($_POST["simpan"])) {
    if ($db->addPasien($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Ditambah');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Ditambah');
        document.location.href = 'index.php';
        </script>";
    }
}
?>

<div class="container">

    <div class="row">

        <div class="col-md-6 mb-5 mt-5">
            <h2>Daftar</h2>
            <hr>
            <form method="POST">
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Username</label>
                        <input name="user" type="text" class="form-control" autofocus="autofocus">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Password</label>
                        <input name="pass" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Nama</label>
                        <input name="nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="form-label-group">
                        <select name="jenis" class="form-control">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Tanggal Lahir</label>
                        <input name="tgl" type="date" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label>Alamat</label>
                        <input name="alamat" type="text" class="form-control">
                    </div>
                </div>
                <button name="simpan" class="btn btn-success">Simpan</button>
            </form>
        </div>

    </div>
</div>