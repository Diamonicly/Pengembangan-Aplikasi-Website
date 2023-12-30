<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include("connect.php");
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id=$_GET["id"];
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    $query = "DELETE FROM showroom_mobil WHERE id = '$id'";
    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if ($koneksi->query($query) === TRUE) {
        echo "<script>
        alert('Delete Tabel Berhasil');
        window.location.href='list_mobil.php';
        </script>";
    
    } else {
        echo "<script>
        alert('Delete Tabel Gagal');
        window.location.href='form_detail_mobil.php?id=$id';
        </script>";
    }
// Tutup koneksi ke database setelah selesai menggunakan database
$koneksi->close();
?>