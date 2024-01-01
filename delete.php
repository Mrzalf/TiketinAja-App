<?php
//Include file koneksi, untuk koneksikan ke database
include "koneksi.php";

//Cek apakah ada kiriman parameter id_pemesan dari URL
if (isset($_GET['id_pemesan'])) {
    // Bersihkan nilai id_pemesan dari URL untuk menghindari SQL Injection
    $id_pemesan = htmlspecialchars($_GET['id_pemesan']);

    // Query untuk menghapus data berdasarkan id_pemesan yang diterima dari URL
    $sql = "DELETE FROM pemesan WHERE id_pemesan = '$id_pemesan'";

    // Eksekusi query
    $hasil = mysqli_query($kon, $sql);

    // Cek apakah proses penghapusan berhasil
    if ($hasil) {
        // Redirect ke halaman pesan.php setelah berhasil menghapus data
        header("Location: pesan.php");
        exit;
    } else {
        echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
    }
}
?>
