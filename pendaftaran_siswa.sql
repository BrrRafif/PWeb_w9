CREATE TABLE calon_siswa (
    id INT(15) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    jenis_kelamin ENUM('laki-laki', 'perempuan') NOT NULL,
    agama VARCHAR(20) NOT NULL,
    sekolah_asal VARCHAR(100) NOT NULL
);

INSERT INTO calon_siswa 
    (id, nama, alamat, jenis_kelamin, agama, sekolah_asal) 
VALUES 
    (10, 'Lia Maheswari', 'Jl. Mangga No. 3, Mataram', 'perempuan', 'Hindu', 'SMPN 32 Ampenan'),
    (2, 'Sari Kurnia Ningsih', 'Jl. Cempaka No. 12, Mataram', 'perempuan', 'Islam', 'SMPN 12 Mataram'),
    (87, 'Berwyn Raff Alvaro', 'Jl. Kedondong No. 15, Mataram', 'laki-laki', 'Islam', 'SMPN 5 Cirebon');