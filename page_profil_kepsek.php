<?php 
	session_start();
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profil Kepsek</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

        .navbar-kepsek {
    background-color: #3498db; /* Ubah warna background ke warna sebelumnya */
    border: 1px solid #2978a0;
    padding: 10px 0;
    text-align: center; /* Posisi teks navbar di tengah */
}

        .navbar-kepsek a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar-kepsek a:hover {
            background-color: #ddd;
            color: black;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 10px;
            margin: 20px auto;
            width: 50%;
        }
        .container label {
            font-weight: bold;
        }
        .container input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
    </style>
</head>
<body>

<div class="navbar-kepsek" id="navbar-guru">
        <a href="page_kepsek.php">Home</a>
        <a href="page_profil_kepsek.php">Profil</a>
        <a href="page_beri_nilai_kepsek.php">Nilai Guru</a>
        <a href="page_laporan_kinerja_guru_kepsek.php">Laporan Kinerja Guru</a>
        <a href="page_jenjang2_kepsek.php">Jenjang</a>
        <a href="logout.php">Logout</a>
    </div>
    
    <div class="container">
    <?php
$tampilPeg = mysqli_query($koneksi, "SELECT * FROM tabel_jabatan WHERE id='$_SESSION[id]'");
$peg = mysqli_fetch_array($tampilPeg);
$data = mysqli_query($koneksi, "SELECT * FROM tabel_jabatan WHERE username='$_SESSION[username]';");
while ($d = mysqli_fetch_array($data)) {
?>
    <div>
        <label>Username:</label>
        <input type="text" value="<?php echo $_SESSION['username'] ?>" readonly>
    </div>
    <div>
        <label>Nama:</label>
        <input type="text" value="<?php echo $d['nama']; ?>" readonly>
    </div>
    <div>
        <label>tgl lahir:</label>
        <input type="text" value="<?php echo $d['tgl_lahir']; ?>" readonly>
    </div>
    <div>
        <label>Jabatan:</label>
        <input type="text" value="<?php echo $d['jabatan']; ?>" readonly>
    </div>
    <div> <!-- Open the div here -->
        <label>Jenjang:</label>
        <input type="text" value="<?php echo $d['jenjang']; ?>" readonly>
    </div>
    <div>
        <label>Tahun Mulai Tugas:</label>    
        <input type="text" value="<?php echo $d['angkatan']; ?>" readonly>
    </div>
<?php
}
?>

    </div>
    
    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
