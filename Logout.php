<?php
session_start();

// Proses logout di sini (mungkin menghapus sesi pengguna atau melakukan hal lainnya)

// Simpan pesan notifikasi logout
$_SESSION['logout_notif'] = "Anda telah berhasil logout.";

// Hapus notifikasi lain atau sesi yang tidak diperlukan
unset($_SESSION['notif']); // Jika diperlukan

// Redirect ke halaman login atau halaman lain setelah logout
header("Location: ./login.php");
exit;
?>
