<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style-pesan.css">
</head>
<?php include("navbar.php"); ?>
<title> Pemesanan Tiket Konser</title>
<body>
<div class="container">
    <br>
    <h4><center>Pemesanan Tiket Konser</center></h4>
    <?php
    include "koneksi.php";

    // Cek apakah ada kiriman form dari method post
    if (isset($_GET['id_pemesan'])) {
        $id_pemesan = htmlspecialchars($_GET["id_pemesan"]);

        $sql = "DELETE FROM pemesan WHERE id_pemesan='$id_pemesan'";
        $hasil = mysqli_query($kon, $sql);

        // Kondisi apakah berhasil atau tidak
        if ($hasil) {
            header("Location:Pesan.php");
        } else {
            echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
        }
    }

    // Handle fitur pencarian
    if (isset($_GET['search'])) {
        $search = htmlspecialchars($_GET['search']);
        $sql = "SELECT * FROM pemesan WHERE nama LIKE '$search%'";
    } else {
        $sql = "SELECT * FROM pemesan ORDER BY id_pemesan DESC";
    }
    
    // Handle filter harga terendah atau tertinggi
    if (isset($_GET['filter'])) {
        $filter = $_GET['filter'];
        if ($filter === 'lowest') {
            $sql = "SELECT * FROM pemesan ORDER BY harga ASC";
        } elseif ($filter === 'highest') {
            $sql = "SELECT * FROM pemesan ORDER BY harga DESC";
        }
    }
    $hasil = mysqli_query($kon, $sql);
    ?>

    <table class="my-3 table table-bordered">
        <thead>
        <tr class="table-primary">
            <th>No</th>
            <th>Nama</th>
            <th>Konser</th>
            <th>Penyanyi</th>
            <th>Lokasi</th>
            <th>Waktu</th>
            <th>Harga</th>
            <th colspan='2'>Aksi</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $no = 0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["konser"]; ?></td>
                <td><?php echo $data["penyanyi"]; ?></td>
                <td><?php echo $data["lokasi"]; ?></td>
                <td><?php echo $data["waktu"]; ?></td>
                <td><?php echo $data["harga"]; ?></td>
                <td>
                <a href="update.php?id_pemesan=<?php echo htmlspecialchars($data['id_pemesan']); ?>" class="btn btn-warning" role="button">
    <i class="bi bi-arrow-clockwise"></i> Update
</a>
<a href="delete.php?id_pemesan=<?php echo htmlspecialchars($data['id_pemesan']); ?>" class="btn btn-danger" role="button">
    <i class="bi bi-trash"></i> Delete
</a>
<a href="cetak.php?id_pemesan=<?php echo htmlspecialchars($data['id_pemesan']); ?>" class="btn btn-success" role="button">
    <i class="bi bi-printer"></i> Print
</a>




                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <a href="create.php" class="btn btn-primary" role="button">
    <i class="bi bi-cart"></i> Pesan Sekarang
</a>

    <div class="container">
    <br>
    <div class="border p-3">
        <div class="row form-container">
            <!-- Form pencarian -->
            <div class="col-md-6">
                <form class="search-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
                    <div class="form-group">
                        <label for="search">Cari Nama dengan huruf pertama</label>
                        <input type="text" id="search" name="search" class="form-control" placeholder="Masukkan huruf pertama">
                    </div>
                    <button type="submit" class="btn btn-primary">
    <i class="bi bi-search"> Cari</i>
</button>
                </form>
            </div>

            <!-- Form filter harga -->
            <div class="col-md-6">
                <form class="filter-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
                    <label for="search">Filter harga</label>
                    <div class="form-group">
                        <select class="form-control" name="filter">
                            <option value="">Pilih Harga</option>
                            <option value="lowest">Harga Terendah</option>
                            <option value="highest">Harga Tertinggi</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">
    <i class="bi bi-funnel"></i> Filter
</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        if (mysqli_num_rows($hasil) == 0) {
            echo "<div class='my-3 alert alert-info'>Belum ada Transaksi Pemesanan Tiket yang dilakukan</div>";
        }
        ?>
</div>
<br><br><br>
</div>
<?php include("footer.php"); ?>
</body>
</html>