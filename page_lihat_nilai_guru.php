<?php
include "koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Guru</title>
    <style>
        html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    background: url('bgnusput.jpg') no-repeat center center fixed;
    background-size: 100% 100%; /* Mengatur ukuran latar belakang sesuai halaman */
    background-position: center center;
    font-family: Arial, sans-serif;
}

        .navbar-guru {
    background-color: #3498db; /* Ubah warna background ke warna sebelumnya */
    border: 1px solid #2978a0;
    padding: 10px 0;
    text-align: center; /* Posisi teks navbar di tengah */
}

        .navbar-guru ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .navbar-guru li {
            display: inline;
            margin: 0 20px;
        }

        .navbar-guru a {
            text-decoration: none;
            color: #fff;
            padding: 5px 10px;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar-guru a:hover {
            background-color: #2978a0;
            color: #fff;
            text-decoration: underline;
        }

        .container {
            background-color: #fff;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<div class="navbar-guru" id="navbar-guru">
<ul class="nav navbar-nav">
            <li class="active"><a href="page_guru.php">Home</a></li>
            <li><a href="page_profil_guru.php">Profil</a></li>
            <li><a href="page_tombolupload_guru.php">Berkas Portofolio</a></li>
            <li><a href="page_nilai_portofolio_guru.php">Nilai Portofolio</a></li>
            <li><a href="page_lihat_nilai_guru.php">Nilai Rapot</a></li>
            <li><a href="logout.php">Logout</a></li> 
        </ul>
        </div>

    <div class="container">
    <table>
        <tr>
            <th>No</th>
            <th>Tahun Penilaian</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Nilai Pendidikan</th>
            <th>Nilai SDM</th>
            <th>Nilai Kepsek</th>
            <th>Catatan Kepala Sekolah</th>
            <th>Total Nilai</th>
            <th>keterangan</th>
        </tr>
        <?php
            include 'koneksi.php';
            $no = 1;
            $tampilPeg = mysqli_query($koneksi, "SELECT * FROM tabel_jabatan WHERE id='$_SESSION[id]'");
            $peg = mysqli_fetch_array($tampilPeg);

            $data = mysqli_query($koneksi, "SELECT 
        tabel_p_sdm.tahun_penilaian, 
        tabel_p_pendidikan2.tahun_penilaian, 
        tabel_p_kepsek.tahun_penilaian, 
        tabel_jabatan.id, 
        tabel_jabatan.nama, 
        tabel_jabatan.jabatan, 
        tabel_p_pendidikan2.nilai, 
        tabel_p_sdm.total_penilaian_sdm, 
        tabel_p_kepsek.total_penilaian_kepsek, 
        tabel_p_kepsek.catatan_kepsek
    FROM tabel_jabatan
    LEFT JOIN tabel_p_pendidikan2 ON tabel_jabatan.id = tabel_p_pendidikan2.id
    LEFT JOIN tabel_p_sdm ON tabel_jabatan.id = tabel_p_sdm.id
    LEFT JOIN tabel_p_kepsek ON tabel_jabatan.id = tabel_p_kepsek.id
    WHERE 
        username='$_SESSION[username]' AND 
        tabel_p_pendidikan2.validasi ='yes' AND 
        tabel_p_sdm.tahun_penilaian = tabel_p_pendidikan2.tahun_penilaian AND 
        tabel_p_pendidikan2.tahun_penilaian = tabel_p_kepsek.tahun_penilaian");

            while ($d = mysqli_fetch_array($data)) {
                $totalNilai = (0.3 * $d['total_penilaian_sdm']) + (0.4 * $d['total_penilaian_kepsek']) + (0.3 * $d['nilai']); // Calculate total score with weights
            ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['tahun_penilaian']; ?></td>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jabatan']; ?></td>
                <td><?php echo $d['nilai']; ?></td>
                <td><?php echo $d['total_penilaian_sdm']; ?></td>
                <td><?php echo $d['total_penilaian_kepsek']; ?></td>
                <td><?php echo $d['catatan_kepsek']; ?></td>
                <td><?php echo $totalNilai; ?></td> <!-- Total score -->
                <td>
                <?php
                    // Cek apakah nilai-nilai sudah diisi
                    if ($d['nilai'] !== null && $d['total_penilaian_sdm'] !== null && $d['total_penilaian_kepsek'] !== null) {
                        $keterangan = ($totalNilai > 70) ? 'anda lulus ke tahun ajaran berikutnya' : 'anda tidak lulus ke tahun ajaran berikutnya';
                        echo $keterangan;
                        $id_karyawan = $d['id'];
                        $query = "SELECT * FROM tabel_keterangan_karyawan WHERE id = '$id_karyawan'";
                        $cek = mysqli_query($koneksi, $query);

                        if (mysqli_num_rows($cek) == 0) {
                            // Data belum ada, maka baru lakukan insert
                            $query2 = "INSERT INTO tabel_keterangan_karyawan (id_keterangan, id, nama, total_nilai, tahun_penilaian, keterangan) VALUES ('', '$id_karyawan', '$d[nama]', '$totalNilai','$d[tahun_penilaian]', '$keterangan')";
                            if (mysqli_query($koneksi, $query2)) {
                                echo "";
                            } else {
                                echo "Error: " . mysqli_error($koneksi);
                            }
                        } else {
                            // Data sudah ada, lakukan update
                            $query3 = "UPDATE tabel_keterangan_karyawan SET total_nilai = '$totalNilai', tahun_penilaian = '$d[tahun_penilaian]', keterangan = '$keterangan' WHERE id = '$id_karyawan'";
                            if (mysqli_query($koneksi, $query3)) {
                                echo "";
                            } else {
                                echo "Error: " . mysqli_error($koneksi);
                            }
                        }
                    } else {
                        echo 'Nilai belum diisi'; // Tampilkan pesan jika nilai belum diisi
                    }
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
</div>

</body>
</html>
