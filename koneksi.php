<?php
// Konfigurasi database
$host = "localhost"; // Ganti dengan alamat host jika diperlukan
$username = "root"; // Ganti dengan username database kamu
$password = ""; // Ganti dengan password database kamu
$dbname = "haldin"; // Ganti dengan nama database kamu

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $dbname);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
echo "Koneksi berhasil!";

// Tutup koneksi setelah selesai
$koneksi->close();
?>