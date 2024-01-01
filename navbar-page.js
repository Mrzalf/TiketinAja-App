// Ambil elemen navbar
var navbar = document.querySelector(".navbar");

// Simpan posisi navbar
var navbarPosition = navbar.offsetTop;

// Tambahkan event listener untuk mendengarkan saat halaman di-scroll
window.addEventListener("scroll", function () {
  // Periksa posisi scroll saat ini
  if (window.scrollY > navbarPosition) {
    // Jika scroll di atas posisi navbar, tambahkan kelas 'scrolled' pada navbar
    navbar.classList.add("scrolled");
  } else {
    // Jika scroll kembali ke atas posisi navbar, hapus kelas 'scrolled' dari navbar
    navbar.classList.remove("scrolled");
  }
});
