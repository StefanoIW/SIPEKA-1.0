<?php
 include 'koneksi.php';    
 $selectedJenjang = $_POST['jenjang'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Pegawai</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Center-align the navbar */
        html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    background: url('bgnusput.jpg') no-repeat center center fixed;
    background-size: 100% 100%; /* Mengatur ukuran latar belakang sesuai halaman */
    background-position: center center;
    font-family: Arial, sans-serif;
}

        .navbar-sdm {
    background-color: #3498db; /* Ubah warna background ke warna sebelumnya */
    border: 1px solid #2978a0;
    padding: 10px 0;
    text-align: center; /* Posisi teks navbar di tengah */
}

        .navbar-sdm a {
            display: inline-block; /* Display links in a horizontal line */
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar-sdm a:hover {
            background-color: #ddd;
            color: black;
        }
        /* Style the table */
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 90%;
            background-color: rgba(255, 255, 255, 0.7); /* Set background color with opacity */
        }
        th, td {
            border: 2px solid #349DB3; /* Set the border color to match the navbar */
            background-color: rgba(255, 255, 255, 0.7); /* Set the background color of cells with opacity */
            font-weight: bold; /* Make the text bold */
        }
    </style>
</head>
<body>
<div class="navbar-sdm">
        <a href="page_sdm.php">Home</a>
        <a href="page_profil_sdm.php">Profil</a>
        <a href="page_beri_nilai_sdm.php">Nilai SDM</a>
        <a href="page_laporan_kinerja_guru_sdm.php">Laporan Kinerja Guru</a>
        <a href="page_jenjang_sdm.php">Jenjang</a>
        <a href="page_nilaisemua_sdm.php">Cek Nilai </a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container mt-4">
        <h1>Guru <?php echo $selectedJenjang ;?></h1>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>jenjang</th>
                <th>Mata Pelajaran</th>
                <th>Angkatan</th>
                <th>Opsi</th>
            </tr>
            <?php 
            $data = mysqli_query($koneksi, "SELECT * FROM tabel_karyawan WHERE jenjang='$selectedJenjang'");
            $no = 1;
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jenjang']; ?></td>
                <td><?php echo $d['mata_pelajaran']; ?></td>
                <td><?php echo $d['angkatan']; ?></td>
                <td>
                    <a href="page_assignment_sdm.php?id=<?php echo $d['id']; ?>"><button class="btn btn-success">Lihat Nilai</button></a>
                </td>
            </tr>
            <?php 
            }
            ?>
        </table>
    </div>
    
    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>