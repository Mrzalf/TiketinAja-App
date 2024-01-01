<?php 
include("../connection.php");

var_dump($_POST);

// Inisialisasi Variable
$username = $_POST['username'];
$password = $_POST['password'];

//Ambil dari database
$query = mysqli_query($connect ,"SELECT * FROM register WHERE username='$username'");

// Cek Username
echo mysqli_num_rows($query);
if (mysqli_num_rows($query) > 0) {
    // Ada baris data yang ditemukan
    $user = mysqli_fetch_assoc($query);

    // Lakukan sesuatu dengan data yang ditemukan
    // Verifikasi password
    if (password_verify($password, $user['password'])) {
        // Password cocok, izinkan pengguna masuk
        $_SESSION['notif'] = "Login berhasil";
        header("Location: ../page-awal.php");
        die();
    } else {
        // Password salah, tolak akses
        $_SESSION['notif'] = "Gagal login, username atau password salah";
        header("Location: ../Login.php");
        die();
    }
} else {
    // Tidak ada data yang ditemukan
    $_SESSION['notif'] = "Gagal login, username atau password salah";
    header("Location: ../Login.php");
    die();
}

?>