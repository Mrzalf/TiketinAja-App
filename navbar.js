// Ambil elemen navbar
var navbar = document.querySelector(".navbar");

// Tambahkan event listener untuk mendengarkan saat halaman di-scroll
window.addEventListener("scroll", function () {
  // Periksa posisi scroll saat ini
  if (window.scrollY > 0) {
    // Jika scroll di atas 0, tambahkan kelas 'scrolled' pada navbar
    navbar.classList.add("scrolled");
  } else {
    // Jika scroll kembali ke atas (0), hapus kelas 'scrolled' dari navbar
    navbar.classList.remove("scrolled");
  }
});
