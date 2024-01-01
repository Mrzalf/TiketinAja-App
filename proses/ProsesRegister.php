<?php
include("../connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST); 

    // Ambil data dari formulir
    $username = $_POST["username"];
    $nama = $_POST["nama"];
    $telepon = $_POST["telepon"];
    $email = $_POST["email"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $password = $_POST["password"];
    $ulangi_password = $_POST["ulangi_password"];

    // Validasi data (Anda dapat menambahkan validasi lebih lanjut sesuai kebutuhan)
    if (empty($nama) || empty($telepon) || empty($email) || empty($jenis_kelamin) || empty($tempat_lahir) || empty($tgl_lahir) || empty($password) || empty($ulangi_password)) {
        echo "Semua kolom harus diisi.";
    } 
    elseif ($password != $ulangi_password) {
        $_SESSION['notif'] = "Password dan konfirmasi password tidak cocok";
        echo "Password dan konfirmasi password tidak cocok.";
    } 
    else {

        // Hash password dengan salt -> Hashing untuk keamanan akun (SECURITY)
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Data valid, lakukan tindakan selanjutnya, seperti menyimpan ke database.
        // Di sini, Anda dapat menambahkan kode untuk menyimpan data ke dalam database.

        $query = "INSERT INTO `register`(`username`, `nama`, `no_telp`, `email`, `tempat_lahir`, `tgl_lahir`, `jk`, `password`) VALUES ('$username', '$nama', '$telepon', '$email', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$hashed_password')";
        
        //proses
        if ($connect->query($query) == TRUE) {
            $_SESSION['notif'] = "Pendaftaran berhasil";
            header("Location: ../Login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }

        // Contoh: Simpan data ke dalam file teks
        $data_registrasi = "Nama: $nama, Telepon: $telepon, Email: $email, Jenis Kelamin: $jenis_kelamin, Tempat Lahir: $tempat_lahir, Tanggal Lahir: $tgl_lahir\n";
        file_put_contents("data_registrasi.txt", $data_registrasi, FILE_APPEND);

        echo "Registrasi berhasil. Terima kasih!";

        
    }


} 

else {
    echo "Akses tidak sah.";
}
?>