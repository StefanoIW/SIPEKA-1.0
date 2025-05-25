<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin</title>
    <style>
        /* Add CSS styles for the centered navigation bar */
        .navbar-kepsek {
            background-color: #3498db;
            border: 1px solid #2978a0;
            padding: 10px 0;
            text-align: center;
        }

        .navbar-kepsek a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            margin: 0 10px;
            transition: background-color 0.3s ease;
        }

        .navbar-kepsek a:hover {
            background-color: #2978a0;
        }

        /* Add background image to the body */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: url('bgnusput.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        /* Add CSS for the welcome message */
        .welcome-message {
            text-align: center;
            padding: 100px;
            color: #3498db;
            font-size: 36px;
        }

        /* Add styles for the container */
        .options-container {
            text-align: center;
            padding: 20px;
        }

        .options-container h2 {
            color: #3498db;
            font-size: 24px;
        }

        .options-container .option {
            display: inline-block;
            margin: 20px;
            width: 200px; /* Adjust the width as needed */
            height: 260px; /* Set the height equal to the width for a square shape */
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            position: relative;
            overflow: hidden;
        }

        .options-container .option img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .options-container .option .text {
            padding: 15px;
            box-sizing: border-box;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(52, 152, 219, 0.8);
        }

        .options-container .option a {
            display: block;
            width: 100%;
            height: 100%;
            position: relative;
            z-index: 1;
            text-decoration: none;
            color: white;
        }

        .options-container .option:hover {
            background-color: #2978a0;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Add box shadow on hover */
        }

        /* Style for SIPEKA text */
        .sipeka-text {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            font-size: 24px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="navbar-kepsek" id="navbar-guru">
        <a href="page_admin.php">Home</a>
        <a href="page_register_admin.php">Register Guru</a>
        <a href="page_edit_admin.php">Edit Guru</a>
        <a href="page_jenjang_admin.php">Jenjang</a>
        <a href="page_setting_admin.php">Pengaturan Waktu</a>
        <a href="logout.php">Logout</a>
    </div>

    <!-- Welcome message in the center of the page -->
    <div class="welcome-message">
        <h1>Selamat Datang</h1>
        <!-- SIPEKA text -->
        <div class="sipeka-text">SI-PEKA</div>
    </div>

    <!-- Container for options -->
    <div class="options-container">
        <h2>Pilih kategori:</h2>
        
        <!-- Container for SDM option -->
        <div class="option">
            <a href="page_sdm.php">
                <img src="sdm.png" alt="SDM Logo">
                <div class="text">Masuk SDM</div>
            </a>
        </div>
        
        <!-- Container for Pendidikan option -->
        <div class="option">
            <a href="page_pendidikan.php">
                <img src="pendidikan.png" alt="Pendidikan Logo">
                <div class="text">Masuk Pendidikan</div>
            </a>
        </div>

        <!-- Container for Guru option -->
        <div class="option">
            <a href="index.php">
                <img src="guru.png" alt="Guru Logo">
                <div class="text">Masuk Guru</div>
            </a>
        </div>

        <!-- Container for Kepsek option -->
        <div class="option">
            <a href="page_kepsek.php">
                <img src="kepsek.png" alt="Kepsek Logo">
                <div class="text">Masuk Kepsek</div>
            </a>
        </div>
    </div>

</body>
</html>
