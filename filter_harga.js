function updateHarga() {
  var lokasi = document.getElementsByName("lokasi")[0].value;
  var hargaSelect = document.getElementsByName("harga")[0];

  switch (lokasi) {
    case "Cat 1":
      hargaSelect.value = "Rp.100.000,-.";
      break;
    case "Cat 2":
      hargaSelect.value = "Rp.200.000,-.";
      break;
    case "Cat 3":
      hargaSelect.value = "Rp.300.000,-.";
      break;
    case "Platinum":
      hargaSelect.value = "Rp.400.000,-.";
      break;
    case "VIP":
      hargaSelect.value = "Rp.500.000,-.";
      break;
    case "Golden":
      hargaSelect.value = "Rp.600.000,-.";
      break;
    default:
      hargaSelect.value = "";
      break;
  }
}
