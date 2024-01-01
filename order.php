<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style-genre.css">
  <title>Tiket Tersedia</title>
</head>
<body>
  <?php include("navbar.php"); ?>

  <h1 class="genre-title">Tiket Konser Yang Tersedia</h1>

  <div class="film-container">
    <div class="film-item">
      <img src="img/guyon-waton.png" alt="Film 1">
      <h3>Guyon Waton</h3>
      <a href="Pesan.php" class="read-more-button">Pesan Sekarang</a>
    </div>
    <div class="film-item">
      <img src="img/mahalini.png" alt="Film 2">
      <h3>Mahalini</h3>
      <a href="Pesan.php" class="read-more-button">Pesan Sekarang</a>
    </div>
    <div class="film-item">
      <img src="img/fiersa.png" alt="Film 3">
      <h3>Fiersa Besari</h3>
      <a href="Pesan.php" class="read-more-button">Pesan Sekarang</a>
    </div>
    <div class="film-item">
      <img src="img/denny.png" alt="Film 4">
      <h3>Denny Caknan</h3>
      <a href="Pesan.php" class="read-more-button">Pesan Sekarang</a>
    </div>
  </div>

  <?php include("footer.php"); ?>
</body>
</html>
