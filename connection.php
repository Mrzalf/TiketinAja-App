<?php
session_start();

// Informasi koneksi MySQL
$server = "localhost"; // Server MySQL
$username = "root"; // Nama pengguna MySQL
$password = ""; // Kata sandi MySQL
$database = "cinematix"; // Nama database MySQL

// Buat koneksi
$connect = new mysqli($server, $username, $password, $database);

// Periksa koneksi
if ($connect->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>