<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?> <!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Pendaftaran Siswa Baru <br> SMKN 198 Batam</h1>
        </header>

        <nav class="menu">
            <ul>
                <li><a href="form-daftar.php">Daftar Baru</a></li>
                <li><a href="list-siswa.php">Pendaftar</a></li>
            </ul>
        </nav>

        <?php if(isset($_GET['status'])): ?>
            <p class="flash-message">
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </T>
        <?php endif; ?>
    </div>

    <footer class="site-footer">
    <div class="footer-container">
        
        <h3>Pendaftaran Siswa Baru Tahun Ajaran 2025/2026</h3>
        <p class="tagline">Mewujudkan Genserasi Emas Melalui Pendidikan Berkualitas</p>

        <nav class="footer-nav">
            <a href="form-daftar.php">Pendaftaran</a> |
            <a href="list-siswa.php">Siswa</a> |
        </nav>
        
        <div class="contact-info">
            <p>Surabaya, Jawa Timur</p>
            <p>Hubungi Kami: 08123456789 | Email: ppdb.id@gmail.com</p>
        </div>
    </div>
</footer>
</body>

</html>