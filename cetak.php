<?php
require('fpdf/fpdf.php'); // Memanggil library FPDF

// Inisialisasi PDF dengan orientasi landscape
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();

// Membuat judul
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(275, 10, 'Rekapan Transaksi Tiket Konser', 0, 1, 'C');
$pdf->Ln(10); // Memberikan spasi vertikal 10mm (ganti angka sesuai kebutuhan)


// Tabel header dengan warna latar belakang
$pdf->SetFillColor(173, 216, 230); // Warna biru muda
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(20, 10, 'No', 1, 0, 'C', true);
$pdf->Cell(50, 10, 'Nama', 1, 0, 'C', true);
$pdf->Cell(50, 10, 'Konser', 1, 0, 'C', true);
$pdf->Cell(50, 10, 'Penyanyi', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Lokasi', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Waktu', 1, 0, 'C', true);
$pdf->Cell(25, 10, 'Harga', 1, 1, 'C', true);

// Mengambil data dari database
include "koneksi.php";
$sql = "SELECT * FROM pemesan ORDER BY id_pemesan DESC";
$hasil = mysqli_query($kon, $sql);

// ... (kode sebelumnya)

// Menampilkan data ke dalam tabel dengan warna latar belakang bergantian
$pdf->SetFont('Arial', '', 10);
$no = 0;
$height = 10; // Tinggi sel
while ($data = mysqli_fetch_array($hasil)) {
    $no++;
    if ($no % 2 == 0) {
        $pdf->SetFillColor(79, 111, 82); // Warna untuk baris genap
    } else {
        $pdf->SetFillColor(134, 167, 137); // Warna untuk baris ganjil
    }

    // Cell untuk setiap kolom
    $pdf->Cell(20, $height, $no, 1, 0, 'C', true);
    $pdf->Cell(50, $height, $data["nama"], 1, 0, '', true);
    $pdf->Cell(50, $height, $data["konser"], 1, 0, '', true);
    $pdf->Cell(50, $height, $data["penyanyi"], 1, 0, '', true);
    $pdf->Cell(40, $height, $data["lokasi"], 1, 0, '', true);
    $pdf->Cell(40, $height, $data["waktu"], 1, 0, '', true);
    $pdf->Cell(25, $height, $data["harga"], 1, 1, 'C', true);
}

// Output PDF
$pdf->Output();
