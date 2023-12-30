<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost:3308";
$username = "root";
$password = "";
$dbname = "modul3_jurnal";

// Menggunakan host, username, password, dan nama database, buat objek koneksi ($koneksi) ke database
$koneksi = new mysqli($host, $username, $password, $dbname);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
if ($koneksi->connect_error) {
// Jika terjadi kesalahan koneksi, hentikan program dengan pesan kesalahan: "Koneksi Gagal: [pesan kesalahan koneksi]"
    die("Koneksi Gagal: " . mysqli_connect_error());
}
// 
?>