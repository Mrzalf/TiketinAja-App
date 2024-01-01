<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Pendaftaran Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style-update.css">
</head>
<?php include("navbar.php"); ?>
<body>
<div class="container">
    <?php

include "koneksi.php";

function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_GET['id_pemesan'])) {
    $id_pemesan = input($_GET["id_pemesan"]);

    $sql = "SELECT * FROM pemesan WHERE id_pemesan=$id_pemesan";
    $hasil = mysqli_query($kon, $sql);
    $data = mysqli_fetch_assoc($hasil);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_pemesan = input($_POST["id_pemesan"]);
    $nama = input($_POST["nama"]);
    $konser = input($_POST["konser"]);
    $penyanyi = input($_POST["penyanyi"]);
    $lokasi = input($_POST["lokasi"]);
    $waktu = input($_POST["waktu"]);
    $harga = input($_POST["harga"]);

    $sql = "UPDATE pemesan SET 
            nama='$nama',
            konser='$konser',
            penyanyi='$penyanyi',
            lokasi='$lokasi',
            waktu='$waktu',
            harga='$harga'
            WHERE id_pemesan=$id_pemesan";

    $hasil = mysqli_query($kon, $sql);

    if ($hasil) {
        header("Location: Pesan.php");
        exit;
    } else {
        echo "<div class='alert alert-danger'>Data Gagal disimpan.</div>";
    }
}

    ?>
    <h2>Update Tiket Konser</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="form-group">
    <label>Nama :</label>
    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required/>
</div>

<div class="form-group">
    <label>Konser :</label>
    <select name="konser" class="form-control" required>
        <option value="">Pilih Jenis Konser</option>
        <option value="Pop">Pop</option>
        <option value="Dangdut">Dangdut</option>
    </select>
</div>

<div class="form-group">
    <label>Penyanyi :</label>
    <select name="penyanyi" class="form-control" required>
        <option value="">Pilih Penyanyi</option>
        <option value="Guyon Waton">Guyon Waton</option>
        <option value="Mahalini">Mahalini</option>
        <option value="Fiersa Besari">Fiersa Besari</option>
        <option value="Denny Caknan">Denny Caknan</option>
    </select>
</div>

<div class="form-group">
    <label>Lokasi :</label>
    <select name="lokasi" class="form-control" required onchange="updateHarga()">
    <option value="">Pilih Lokasi</option>
        <option value="Cat 1">Cat 1</option>
        <option value="Cat 2">Cat 2</option>
        <option value="Cat 3">Cat 3</option>
        <option value="Platinum">Platinum</option>
        <option value="VIP">VIP</option>
        <option value="Golden">Golden</option>
    </select>
</div>

<div class="form-group">
    <label>Waktu :</label>
    <select name="waktu" class="form-control" required>
        <option value="">Pilih Waktu</option>
        <option value="Pagi">Pagi</option>
        <option value="Siang">Siang</option>
        <option value="Malam">Malam</option>
    </select>
</div>

<div class="form-group">
    <label>Harga :</label>
    <select name="harga" id="harga" class="form-control" required>
        <option value="">Pilih Harga</option>
        <option value="Rp.100.000,-.">Rp.100.000,-.</option>
        <option value="Rp.200.000,-.">Rp.200.000,-.</option>
        <option value="Rp.300.000,-.">Rp.300.000,-.</option>
        <option value="Rp.400.000,-.">Rp.400.000,-.</option>
        <option value="Rp.500.000,-.">Rp.500.000,-.</option>
        <option value="Rp.600.000,-.">Rp.600.000,-.</option>
    </select>
</div>
        <input type="hidden" name="id_pemesan" value="<?php echo $data['id_pemesan']; ?>" /><br>

        <div class="d-flex justify-content-center">
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
</div>
    </form>
</div>
<?php include("footer.php"); ?>
<script src="filter_penyanyi.js"></script>
<script src="filter_harga.js"></script>
</body>
</html>
