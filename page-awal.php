<?php include('./connection.php') ?>
<!DOCTYPE html> 
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style-page.css" />
    <title>TiketinAja</title>
  </head>
  <body>
    <div class="navbar">
  <a href="page-awal.php"> <!-- Tambahkan tautan untuk mengarahkan ke page-awal.php -->
    <div class="logo">
      <img src="img/tikkk-removebg-preview.png" alt="TiketinAja Logo" />
      <link rel="stylesheet" href="./css/navbar.css" />
      <span class="website-name">TiketinAja</span>
    </div>
  </a>
  <ul class="menu">
    <li><a href="#film-section">Sedang Tayang</a></li>
    <li><a href="#akan-tayang-section">Akan Tayang</a></li>
    <li><a href="order.php">Pemesanan</a></li>
    <li><a href="akun.php">Akun</a></li>
    <li>
      <a href="Logout.php">
        <i class="bi bi-box-arrow-right"></i> <!-- Icon box arrow right dari Bootstrap -->
      </a>
    </li>
  </ul>
</div>
<div class="quotes">
  <div class="quotes-overlay"></div>
  <div class="quotes-content">
    <div class="quote-container">
      <p>"Jadikan Pengalaman Nonton Konser Anda Lebih Menyenangkan Dengan Memesan Online Melalui TiketinAja"</p>
      <p>- Muhammad Rizaldy Alifiansyah -</p>
    </div>
    <button class="btn-quote" onclick="changeQuote()">Welcome to TiketinAja</button>
  </div>
</div>
    <div id="film-section">
      <h2>Konser Yang Sedang Tayang</h2>
      <div class="film-list">
        <div class="film-item">
          <a href="guyon-waton.php">
            <img src="img/guyon-waton.png" alt="Film 1" />
            <b><p>Guyon Waton</p></b>
          </a>
        </div>
        <div class="film-item">
          <a href="mahalini.php">
            <img src="img/mahalini.png" alt="Film 2" />
            <b><p>Mahalini</p></b>
          </a>
        </div>
        <div class="film-item">
          <a href="fiersa-besari.php">
            <img src="img/fiersa.png" alt="Film 3" />
            <b><p>Fiersa Besari</p></b>
          </a>
        </div>
        <div class="film-item">
          <a href="denny-caknan.php">
            <img src="img/denny.png" alt="Film 4" />
            <b><p>Denny Caknan</p></b>
          </a>
        </div>
      </div>
    </div>
    <div id="akan-tayang-section" class="film-section">
  <h2>Konser Yang Akan Tayang</h2>
  <div class="film-list">
    <div class="film-item">
      <a href="coldplay.php">
        <img src="img/coldplay.png" alt="Film Akan Tayang 1" />
        <b><p>Coldplay</p></b>
      </a>
    </div>
    <div class="film-item">
      <a href="pamungkas.php">
        <img src="img/pamungkas.png" alt="Film Akan Tayang 2" />
        <b><p>Pamungkas</p></b>
      </a>
    </div>
    <div class="film-item">
      <a href="tiara-andini.php">
        <img src="img/titi.png" alt="Film Akan Tayang 3" />
        <b><p>Tiara Andini</p></b>
      </a>
    </div>
    <div class="film-item">
      <a href="ndx.php">
        <img src="img/ndx.png" alt="Film Akan Tayang 4" />
        <b><p>NDX AKA</p></b>
      </a>
    </div>
  </div>
</div>
<script src="navbar-page.js"></script>
    <?php include("footer.php"); ?>
  </body>
  <?php include 'notif.php'; ?>
</html>
