<?php
// session_start();
include 'conf.php';

class Db extends Conf
{
    // Penyakit =======================================================================================================
    public function getAllPenyakit()
    {
        $query = $this->get("SELECT * FROM tb_Penyakit");
        return $query;
    }

    public function addPenyakit($data)
    {
        global $conn;

        $id    = $data['id'];
        $nama  = $data['nama'];
        $ket   = $data['ket'];

        $query = "INSERT INTO tb_Penyakit VALUES ('$id', '$nama', '$ket')";
        $conn->query($query);
        // echo $query;
        // exit;
        return $conn->affected_rows;
    }

    public function getOnePenyakit($id)
    {
        $query = $this->get("SELECT * FROM tb_Penyakit WHERE penyakit_id = '$id'")[0];
        return $query;
    }

    public function uPenyakit($data)
    {
        global $conn;

        $id    = $data['id'];
        $nama  = $data['nama'];
        $ket   = $data['ket'];

        $query = "UPDATE `tb_Penyakit` SET  `penyakit_nama`  = '$nama',
                                            `penyakit_ket`   = '$ket'
                                            WHERE 
                                            `penyakit_id`    = '$id'";
        // echo $query;
        // exit;
        $conn->query($query);

        return $conn->affected_rows;
    }

    public function dPenyakit($id)
    {
        global $conn;
        $query = "DELETE FROM tb_Penyakit WHERE penyakit_id = '$id'";
        $conn->query($query);

        return $conn->affected_rows;
    }
    // Pasien  ========================================================================================================

    public function getAllPasien()
    {
        $query = $this->get("SELECT * FROM tb_Pasien");
        return $query;
    }

    public function addPasien($data)
    {
        global $conn;

        $user   = $data['user'];
        $pass   = $data['pass'];
        $nama   = $data['nama'];
        $jenis  = $data['jenis'];
        $tgl    = $data['tgl'];
        $alamat = $data['alamat'];

        $query = "INSERT INTO tb_Pasien VALUES ('',
                                                '$user', 
                                                '$pass', 
                                                '$nama', 
                                                '$jenis', 
                                                '$tgl', 
                                                '$alamat')";
        $conn->query($query);
        // echo $query;
        // exit;
        return $conn->affected_rows;
    }

    public function getOnePasien($id)
    {
        $query = $this->get("SELECT * FROM tb_Pasien WHERE pasien_id = '$id'")[0];
        return $query;
    }

    public function uPasien($data)
    {
        global $conn;

        $id     = $data['id'];
        $user   = $data['user'];
        $pass   = $data['pass'];
        $nama   = $data['nama'];
        $jenis  = $data['jenis'];
        $tgl    = $data['tgl'];
        $alamat = $data['alamat'];

        $query = "UPDATE `tb_Pasien` SET    `pasien_user`      = '$user',
                                            `pasien_pass`      = '$pass',
                                            `pasien_nama`      = '$nama',
                                            `pasien_jk`        = '$jenis',
                                            `pasien_tgl_lahir` = '$tgl',
                                            `pasien_alamat`    = '$alamat'
                                            WHERE 
                                            `pasien_id`        = '$id'";
        // echo $query;
        // exit;
        $conn->query($query);

        return $conn->affected_rows;
    }

    public function dPasien($id)
    {
        global $conn;
        $query = "DELETE FROM tb_Pasien WHERE pasien_id = '$id'";
        $conn->query($query);

        return $conn->affected_rows;
    }

    // Gejala  ========================================================================================================
    public function getAllGejala()
    {
        $query = $this->get("SELECT * FROM tb_Gejala");
        return $query;
    }

    public function addGejala($data)
    {
        global $conn;

        $id   = $data['id'];
        $nama = $data['nama'];
        $cf   = $data['cf'];

        $query = "INSERT INTO tb_Gejala VALUES ('$id', '$nama', '$cf')";
        $conn->query($query);
        // echo $query;
        // exit;
        return $conn->affected_rows;
    }

    public function getOneGejala($id)
    {
        $query = $this->get("SELECT * FROM tb_Gejala WHERE gejala_id = '$id'")[0];
        return $query;
    }

    public function uGejala($data)
    {
        global $conn;

        $id   = $data['id'];
        $nama = $data['nama'];
        $cf   = $data['cf'];

        $query = "UPDATE `tb_Gejala` SET    `gejala_nama`  = '$nama',
                                            `gejala_cf`   = '$cf'
                                            WHERE 
                                            `gejala_id`    = '$id'";
        // echo $query;
        // exit;
        $conn->query($query);

        return $conn->affected_rows;
    }

    public function dGejala($id)
    {
        global $conn;
        $query = "DELETE FROM tb_Gejala WHERE gejala_id = '$id'";
        $conn->query($query);

        return $conn->affected_rows;
    }

    // Hasil  ========================================================================================================
    // SELECT * FROM konsultasi ORDER BY id_konsultasi DESC
    public function getAllHasil($id)
    {
        $query = $this->get("   SELECT * FROM tb_Konsultasi, tb_Penyakit, tb_Pasien, tb_Solusi
        WHERE   tb_Konsultasi.penyakit_id=tb_Penyakit.penyakit_id
        AND 	tb_Solusi.penyakit_id=tb_Penyakit.penyakit_id
        AND     tb_Konsultasi.pasien_id=tb_Pasien.pasien_id 
        AND     tb_Konsultasi.pasien_id='$id'
        ORDER BY  tb_Konsultasi.konsultasi_id DESC  ")[0];
        return $query;
    }

    public function getOneHasil($id)
    {
        $query = $this->get("   SELECT * FROM tb_Konsultasi, tb_Penyakit, tb_Pasien, tb_Solusi
        WHERE   tb_Konsultasi.penyakit_id=tb_Penyakit.penyakit_id
        AND 	tb_Solusi.penyakit_id=tb_Penyakit.penyakit_id
        AND     tb_Konsultasi.pasien_id=tb_Pasien.pasien_id 
        AND     tb_Konsultasi.konsultasi_id='$id'
        ORDER BY  tb_Konsultasi.konsultasi_id DESC  ")[0];
        return $query;
    }
    // Konsultasi (Admin)
    public function getAllKonsultasi($id)
    {
        $query = $this->get("   SELECT * FROM `tb_Konsultasi` 
                                LEFT JOIN tb_Pasien ON tb_Konsultasi.pasien_id=tb_Pasien.pasien_id
                                LEFT JOIN tb_Penyakit ON tb_Konsultasi.penyakit_id=tb_Penyakit.penyakit_id
                                WHERE tb_Konsultasi.pasien_id = '$id'");

        return $query;
    }


    // Solusi ================================================================================================
    public function getOneSolusi($id)
    {
        $query = $this->get("SELECT * FROM tb_Solusi WHERE penyakit_id = '$id'");
        return $query;
    }

    public function getAllSolusi()
    {
        $query = $this->get("SELECT * FROM tb_Solusi");
        return $query;
    }
    public function getSatuSolusi($id)
    {
        $query = $this->get("SELECT * FROM tb_Solusi WHERE solusi_id = '$id'")[0];
        return $query;
    }

    public function addSolusi($data)
    {
        $data = $_POST['penyakit'];
        $data = $_POST['nama'];
        $data = $_POST['solusi'];

        echo $data;
        exit;
    }
    // Konsultasi ============================================================================================

    public function Konsultasi($data)
    {
        global $conn;

        // var_dump($data);
        // exit;
        // get data diri pasien
        $id      = $data['id'];
        $tgl_kon = $data['tgl_kon'];

        // get data gejala dari form
        $G01    = htmlspecialchars($data["G01"]);
        $G02    = htmlspecialchars($data["G02"]);
        $G03    = htmlspecialchars($data["G03"]);
        $G04    = htmlspecialchars($data["G04"]);
        $G05    = htmlspecialchars($data["G05"]);
        $G06    = htmlspecialchars($data["G06"]);
        $G07    = htmlspecialchars($data["G07"]);
        $G08    = htmlspecialchars($data["G08"]);
        $G09    = htmlspecialchars($data["G09"]);
        $G10    = htmlspecialchars($data["G10"]);
        $G11    = htmlspecialchars($data["G11"]);
        $G12    = htmlspecialchars($data["G12"]);
        $G13    = htmlspecialchars($data["G13"]);
        $G14    = htmlspecialchars($data["G14"]);
        $G15    = htmlspecialchars($data["G15"]);
        $G16    = htmlspecialchars($data["G16"]);
        $G17    = htmlspecialchars($data["G17"]);
        $G18    = htmlspecialchars($data["G18"]);
        $G19    = htmlspecialchars($data["G19"]);
        $G20    = htmlspecialchars($data["G20"]);
        $G21    = htmlspecialchars($data["G21"]);
        $G22    = htmlspecialchars($data["G22"]);
        $G23    = htmlspecialchars($data["G23"]);
        $G24    = htmlspecialchars($data["G24"]);
        $G25    = htmlspecialchars($data["G25"]);
        $G26    = htmlspecialchars($data["G26"]);
        $G27    = htmlspecialchars($data["G27"]);
        $G28    = htmlspecialchars($data["G28"]);
        $G29    = htmlspecialchars($data["G29"]);
        $G30    = htmlspecialchars($data["G30"]);
        $G31    = htmlspecialchars($data["G31"]);
        $G32    = htmlspecialchars($data["G32"]);
        $G33    = htmlspecialchars($data["G33"]);
        $G34    = htmlspecialchars($data["G34"]);
        $G35    = htmlspecialchars($data["G35"]);
        $G36    = htmlspecialchars($data["G36"]);
        $G37    = htmlspecialchars($data["G37"]);
        $G38    = htmlspecialchars($data["G38"]);
        $G39    = htmlspecialchars($data["G39"]);
        $G40    = htmlspecialchars($data["G40"]);
        $G41    = htmlspecialchars($data["G41"]);
        $G42    = htmlspecialchars($data["G42"]);
        $G43    = htmlspecialchars($data["G43"]);
        $G44    = htmlspecialchars($data["G44"]);

        $cfp1 = 0.28;
        $rule1 = (($cfp1 * $G01) + ($cfp1 * $G02) + ($cfp1 * $G05) + ($cfp1 * $G06) + ($cfp1 * $G07)) * 100;

        $cfp2 = 0.40;
        $rule2 = (($cfp2 * $G01) + ($cfp2 * $G03) + ($cfp2 * $G04) + ($cfp2 * $G07) + ($cfp2 * $G08) + ($cfp2 * $G09) + ($cfp2 * $G10) + ($cfp2 * $G23)) * 100;

        $cfp3 = 0.14;
        $rule3 = (($cfp3 * $G11) + ($cfp3 * $G14) + ($cfp3 * $G24) + ($cfp3 * $G26) + ($cfp1 * $G37) + ($cfp1 * $G38)) * 100;

        $cfp4 = 0.14;
        $rule4 = (($cfp4 * $G12) + ($cfp4 * $G13) + ($cfp4 * $G15) + ($cfp4 * $G18) + ($cfp4 * $G41) + ($cfp4 * $G42)) * 100;

        $cfp5 = 0.14;
        $rule5 = (($cfp5 * $G15) + ($cfp5 * $G17) + ($cfp5 * $G19) + ($cfp5 * $G20) + ($cfp5 * $G22) + ($cfp5 * $G42)) * 100;

        $cfp6 = 0.14;
        $rule6 = (($cfp6 * $G07) + ($cfp6 * $G13) + ($cfp6 * $G25) + ($cfp6 * $G36) + ($cfp6 * $G37) + ($cfp6 * $G40)) * 100;

        $cfp7 = 0.16;
        $rule7 = (($cfp7 * $G11) + ($cfp7 * $G13) + ($cfp7 * $G25) + ($cfp7 * $G36) + ($cfp7 * $G37) + ($cfp7 * $G39) + ($cfp7 * $G40) + ($cfp5 * $G43)) * 100;

        $cfp8 = 0.16;
        $rule8 = (($cfp8 * $G11) + ($cfp8 * $G28) + ($cfp8 * $G34)) * 100;

        $cfp9 = 0.16;
        $rule9 = (($cfp9 * $G29) + ($cfp9 * $G30) + ($cfp9 * $G33) + ($cfp8 * $G35) + ($cfp8 * $G39)) * 100;

        $cfp10 = 0.16;
        $rule10 = (($cfp10 * $G06) + ($cfp10 * $G09) + ($cfp10 * $G23) + ($cfp10 * $G43) + ($cfp10 * $G44)) * 100;

        $cfp11 = 0.16;
        $rule11 = (($cfp11 * $G01) + ($cfp9 * $G07) + ($cfp9 * $G11) + ($cfp11 * $G31) + ($cfp11 * $G32)) * 100;

        // Menentukan rule yang benar
        $hasil = max($rule1, $rule2, $rule3, $rule4, $rule5, $rule6, $rule7);

        // Proses Memasukan hasil konsultasi ke database

        if ($hasil === $rule1) {
            $id_penyakit = 'P01';
            $query = $conn->query("INSERT INTO `tb_Konsultasi`(`penyakit_id`, `konsultasi_tgl`, `konsultasi_hasil`,pasien_id) VALUES ('$id_penyakit',NOW(),'$rule1','$id')");
            // var_dump($query); die;
            // return mysqli_affected_rows($conn);

        } elseif ($hasil === $rule2) {
            $id_penyakit = 'P02';
            $query = $conn->query("INSERT INTO `tb_Konsultasi`(`penyakit_id`, `konsultasi_tgl`, `konsultasi_hasil`,pasien_id) VALUES ('$id_penyakit',NOW(),'$rule2','$id')");
            // var_dump($query); die;
            // return mysqli_affected_rows($conn);
        } elseif ($hasil === $rule3) {
            $id_penyakit = 'P03';
            $query = $conn->query("INSERT INTO `tb_Konsultasi`(`penyakit_id`, `konsultasi_tgl`, `konsultasi_hasil`,pasien_id) VALUES ('$id_penyakit',NOW(),'$rule3','$id')");
            // var_dump($query); die;
            // return mysqli_affected_rows($conn);
        } elseif ($hasil === $rule4) {
            $id_penyakit = 'P04';
            $query = $conn->query("INSERT INTO `tb_Konsultasi`(`penyakit_id`, `konsultasi_tgl`, `konsultasi_hasil`,pasien_id) VALUES ('$id_penyakit',NOW(),'$rule4','$id')");
            // var_dump($query); die;
            // return mysqli_affected_rows($conn);
        } elseif ($hasil === $rule5) {
            $id_penyakit = 'P05';
            $query = $conn->query("INSERT INTO `tb_Konsultasi`(`penyakit_id`, `konsultasi_tgl`, `konsultasi_hasil`,pasien_id) VALUES ('$id_penyakit',NOW(),'$rule5','$id')");
            // var_dump($query); die;
            // return mysqli_affected_rows($conn);
        } elseif ($hasil === $rule6) {
            $id_penyakit = 'P06';
            $query = $conn->query("INSERT INTO `tb_Konsultasi`(`penyakit_id`, `konsultasi_tgl`, `konsultasi_hasil`,pasien_id) VALUES ('$id_penyakit',NOW(),'$rule6','$id')");
            // var_dump($query); die;
            // return mysqli_affected_rows($conn);
        } elseif ($hasil === $rule7) {
            $id_penyakit = 'P07';
            $query = $conn->query("INSERT INTO `tb_Konsultasi`(`penyakit_id`, `konsultasi_tgl`, `konsultasi_hasil`,pasien_id) VALUES ('$id_penyakit',NOW(),'$rule7','$id')");
            // var_dump($query); die;
            // return mysqli_affected_rows($conn);
        } elseif ($hasil === $rule8) {
            $id_penyakit = 'P08';
            $query = $conn->query("INSERT INTO `tb_Konsultasi`(`penyakit_id`, `konsultasi_tgl`, `konsultasi_hasil`,pasien_id) VALUES ('$id_penyakit',NOW(),'$rule8','$id')");
            // var_dump($query); die;
            // return mysqli_affected_rows($conn);
        } elseif ($hasil === $rule9) {
            $id_penyakit = 'P09';
            $query = $conn->query("INSERT INTO `tb_Konsultasi`(`penyakit_id`, `konsultasi_tgl`, `konsultasi_hasil`,pasien_id) VALUES ('$id_penyakit',NOW(),'$rule9','$id')");
            // var_dump($query); die;
            // return mysqli_affected_rows($conn);
        } elseif ($hasil === $rule10) {
            $id_penyakit = 'P10';
            $query = $conn->query("INSERT INTO `tb_Konsultasi`(`penyakit_id`, `konsultasi_tgl`, `konsultasi_hasil`,pasien_id) VALUES ('$id_penyakit',NOW(),'$rule10','$id')");
            // var_dump($query); die;
            // return mysqli_affected_rows($conn);
        } elseif ($hasil === $rule11) {
            $id_penyakit = 'P11';
            $query = $conn->query("INSERT INTO `tb_Konsultasi`(`penyakit_id`, `konsultasi_tgl`, `konsultasi_hasil`,pasien_id) VALUES ('$id_penyakit',NOW(),'$rule11','$id')");
            // var_dump($query); die;
            // return mysqli_affected_rows($conn);
        }

        echo "<script>window.location.href='index.php?page=module/Hasil/index'</script>";
        exit;
    }

    public function Login($data)
    {
        global $conn;
        $user  = $data['username'];
        $pass  = $data['password'];
        $level = $data['level'];

        if ($level == "Admin") {
            $query = "SELECT * FROM tb_admin WHERE admin_user = '$user' AND admin_pass = '$pass' ";
            $ambil = $conn->query($query);
            $cek = $ambil->num_rows;

            if ($cek == 1) {
                $_SESSION['akun'] = $ambil->fetch_object();
                echo "
                <script>alert('Berhasil Login');window.location='admin/index.php'</script>
                ";
            } else {
                echo "
                <script>alert('Gagal Login');window.location='index.php?page=module/Login/index'</script>
                ";
            }
        } elseif ($level == "User") {
            $query = "SELECT * FROM tb_Pasien WHERE pasien_user = '$user' AND pasien_pass = '$pass' ";
            $ambil = $conn->query($query);
            $cek = $ambil->num_rows;

            if ($cek == 1) {
                $_SESSION['akun'] = $ambil->fetch_object();
                echo "
                <script>alert('Berhasil Login');window.location='index.php'</script>
                ";
            } else {
                echo "
                <script>alert('Gagal Login');window.location='index.php?page=module/Login/index'</script>
                ";
            }
        }
    }
}
