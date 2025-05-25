<?php
session_start();
include "koneksi.php";

if(isset($_POST['submit'])) {
    // Tangani pembaruan data di sini
    $nama = $_POST['nama'];
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $jabatan = $_POST['jabatan'];
    $jenjang = $_POST['jenjang'];
    $angkatan = $_POST['angkatan'];
    $username = $_SESSION['username'];
    $password = md5($_POST['password']);

    // Menginisialisasi nama file foto profil
    $nama_file = "";

    // Jika ada file yang diunggah, proses unggah dan simpan nama file
    if (isset($_FILES['foto_profil']['name']) && $_FILES['foto_profil']['name'] != "") {
        $nama_file = $_FILES['foto_profil']['name'];
        $tmp_file = $_FILES['foto_profil']['tmp_name'];
        $lokasi_upload = "lokasi/foto_profil/" . $nama_file;
     
        // Pindahkan file ke folder tujuan
        if (move_uploaded_file($tmp_file, $lokasi_upload)) {
            // File berhasil diunggah, masukkan nama file ke dalam kolom foto_profil di tabel_karyawan
            $nama_file = mysqli_real_escape_string($koneksi, $nama_file); // Melindungi dari SQL injection

            // Perbarui data di database
            $update_query = "UPDATE tabel_jabatan j 
                            JOIN tabel_karyawan k ON j.id = k.id 
                            SET j.nama='$nama', j.jabatan='$jabatan', j.jenjang='$jenjang', k.mata_pelajaran='$mata_pelajaran', j.angkatan='$angkatan',
                            k.nama='$nama', k.jenjang='$jenjang', k.foto_profil='$nama_file' , j.password='$password'
                            WHERE j.username='$username'";

            if(mysqli_query($koneksi, $update_query)) {
                // Tidak perlu menampilkan pesan di sini, karena akan kembali ke halaman profil
            } else {
                echo "Gagal memperbarui profil: " . mysqli_error($koneksi);
            }
        } else {
            // File gagal diunggah
            echo "Upload foto profil gagal.";
        }
    } else {
        // Jika tidak ada file yang diunggah, lanjutkan tanpa mengubah nama file
        // Perbarui data di database tanpa memperbarui kolom foto_profil
        $update_query = "UPDATE tabel_jabatan j 
                        JOIN tabel_karyawan k ON j.id = k.id 
                        SET j.nama='$nama', j.jabatan='$jabatan', j.jenjang='$jenjang', k.mata_pelajaran='$mata_pelajaran', j.angkatan='$angkatan',
                        k.nama='$nama', k.jenjang='$jenjang',j.password='$password'
                        WHERE j.username='$username'";

        if(mysqli_query($koneksi, $update_query)) {
            // Tidak perlu menampilkan pesan di sini, karena akan kembali ke halaman profil
        } else {
            echo "Gagal memperbarui profil: " . mysqli_error($koneksi);
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <!-- Include CSS -->
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: url('bgnusput.jpg') no-repeat center center fixed;
            background-size: 100% 100%;
            background-position: center center;
            font-family: Arial, sans-serif;
        }

        .navbar-guru {
            background-color: #3498db;
            border: 1px solid #2978a0;
            padding: 10px 0;
            text-align: center;
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

        h2 {
            color: #3498db;
        }

        .container {
            background-color: #fff;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
        }

        button[type="submit"] {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #2978a0;
        }
    </style>
</head>
<body>
<div class="navbar-guru" id="navbar-guru">
        <ul class="nav navbar-nav">
            <li class="active"><a href="page_guru.php">Home</a></li>
            <li><a href="page_profil_guru.php">Profil</a></li>
            <li><a href="page_upload_berkas_guru.php">Berkas Portofolio</a></li>
            <li><a href="page_lihat_nilai_guru.php">Nilai Rapot</a></li> 
            <li><a href="page_nilai_portofolio_guru.php">Nilai Portofolio</a></li>
            <li><a href="logout.php">Logout</a></li> 
        </ul>
    </div>
    <div class="container">
        <h2>Edit Profil Anda</h2>
        <?php
        if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
            $data = mysqli_query($koneksi, "SELECT k.foto_profil, j.id, j.nama, j.jabatan, j.jenjang, k.mata_pelajaran, j.angkatan, j.password,YEAR(CURDATE()) - YEAR(j.tgl_lahir) AS usia
            FROM tabel_jabatan j
            LEFT JOIN tabel_karyawan k ON j.id = k.id
            WHERE j.username='$_SESSION[username]';"); 
            while ($d = mysqli_fetch_array($data)) {
        ?>
        <form method="post" action="proses_edit_profile.php" enctype="multipart/form-data">
            
            <div>
                <label>Nama:</label>
                <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
            </div>
            <div>
                <label>Mata Pelajaran:</label>
                <input type="text" name="mata_pelajaran" value="<?php echo $d['mata_pelajaran']; ?>">
            </div>
            <div>
                <label>Jabatan:</label>
                <input type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>">
            </div>
            <div>
                <label>Jenjang:</label>
                <input type="text" name="jenjang" value="<?php echo $d['jenjang']; ?>">
            </div>
            <div>
                <label>Tahun Mulai Tugas:</label>
                <input type="text" name="angkatan" value="<?php echo $d['angkatan']; ?>">
            </div>
    <br>
    <div class "form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $d['password'];?>">

            <div>
                <button type="submit" name="submit">Simpan Perubahan</button>
            </div>
        </form>
        <?php
            }
        } else {
            echo "Session data not available. Please log in.";
            // Redirect to login page or take appropriate action
        }
        ?>
    </div>
    
</body>
</html>
 