document.addEventListener("DOMContentLoaded", function () {
  var penyanyiSelect = document.querySelector("select[name='penyanyi']");
  var konserSelect = document.querySelector("select[name='konser']");

  var popSingers = ["Mahalini", "Fiersa Besari"];
  var dangdutSingers = ["Guyon Waton", "Denny Caknan"];

  konserSelect.addEventListener("change", function () {
    var selectedKonser = konserSelect.value;
    penyanyiSelect.innerHTML = "<option value=''>Pilih Penyanyi</option>";

    if (selectedKonser === "Pop") {
      popSingers.forEach(function (singer) {
        var option = document.createElement("option");
        option.value = singer;
        option.textContent = singer;
        penyanyiSelect.appendChild(option);
      });
    } else if (selectedKonser === "Dangdut") {
      dangdutSingers.forEach(function (singer) {
        var option = document.createElement("option");
        option.value = singer;
        option.textContent = singer;
        penyanyiSelect.appendChild(option);
      });
    }
  });
});
