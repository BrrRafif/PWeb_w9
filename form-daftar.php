<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?> <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Formulir Pendaftaran Siswa Baru <br>SMKN 198 Batam</h1>
        </header>

        <form action="proses-pendaftaran.php" method="POST">

            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="nama lengkap" required />

            <label for="alamat">Alamat:</label>
            <textarea name="alamat" required></textarea>

            <label>Jenis Kelamin:</label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" required> Perempuan</label>
            <br><br>

            <label for="agama">Agama:</label>
            <select name="agama" required>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Katolik</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Konghucu</option> 
            </select>
            <br><br>

            <label for="sekolah_asal">Sekolah Asal:</label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" required />
            <br><br>

            <button type="submit" name="daftar">Daftar</button>

        </form>

        <div class="back-button-container">
            <a href="index.php" class="back-button">Kembali ke Halaman Awal</a>
        </div>
    </div>

    <footer class="site-footer">
        <div class="footer-container">
            <h3>Pendaftaran Siswa Baru Tahun Ajaran 2025/2026</h3>
            <p class="tagline">Mewujudkan Generasi Emas Melalui Pendidikan Berkualitas</p>

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