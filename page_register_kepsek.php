<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Kepsek</title>

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

        .navbar-kepsek {
    background-color: #3498db; /* Ubah warna background ke warna sebelumnya */
    border: 1px solid #2978a0;
    padding: 10px 0;
    text-align: center; /* Posisi teks navbar di tengah */
}


        .navbar-kepsek a {
            display: inline-block; /* Display links in a horizontal line */
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar-kepsek a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Styling for the container */
        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Add some opacity for readability */
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .container h1 {
            color: #349DB3; /* Match the navbar color for consistency */
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #349DB3;
            border: none;
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #2978A0;
        }
    </style>
</head>
<body>
    <!-- Create a Bootstrap navigation bar -->
    <div class="navbar-kepsek" id="navbar-guru">
   
        <a href="page_kepsek.php">Home</a>
        <a href="page_register_kepsek.php">Register Guru</a>
        <a href="page_edit_kepsek.php">Edit Karyawan</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container mt-4">
        <h1>Tambah Guru</h1>
        <form method="post" action="proses_register_kepsek.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal lahir:</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="guru" readonly>
            </div>
            <div class="form-group">
            <label for="jenjang">Jenjang:</label>
                <select class="form-control" id="jenjang" name="jenjang">
                <option>PG/TK</option>
                <option>SD</option>
                <option>SMP</option>
                <option>SMA</option>
                <option>SMK</option>
            </select>
            <br>
            <div class="form-group">
                <label for="tahunpenilaian">Tahun Ajaran (misal 2023):</label>
                <input type="number" class="form-control" id="tahunpenilaian" name="tahunpenilaian" min="2023" max="3000" >
            </div>
            <div class="form-group">    
                <label for="matapelajaran">Mata Pelajaran:</label>
                <input type="text" class="form-control" id="matapelajaran" name="matapelajaran">
            </div>
            <div class="form-group">
                <label for="berkas">Foto Profil:</label>
                <input type="file" class="form-control-file" id="berkas" name="berkas">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
