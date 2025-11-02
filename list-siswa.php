<?php include("config.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Siswa SMKN 198 Batam</h1>
            <h2>Tahun Ajaran 2025/2026</h2>
        </header>

        <br>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM calon_siswa";
                $query = mysqli_query($db, $sql);
                $nomor = 1;

                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";
                    echo "<td>".$nomor++."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";
                    echo "<td class='action-links'>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <p class="total">Total: <?php echo mysqli_num_rows($query) ?></p>

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
            <a href="list-siswa.php">Siswa</a>
        </nav>
        
        <div class="contact-info">
            <p>Surabaya, Jawa Timur</p>
            <p>Hubungi Kami: 08123456789 | Email: ppdb.id@gmail.com</p>
        </div>
    </div>
</footer>
</body>

</html>



