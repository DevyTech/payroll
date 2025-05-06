// Navigasi Function
document.querySelectorAll(".nav-link").forEach(function (active) {
  active.addEventListener("click", function (e) {
    e.target.classList.toggle("active");
  });
});

// Text Field Function
const input = document.getElementById("inputSalary");

input.addEventListener("input", function (e) {
  // Hapus semua karakter selain angka
  let value = e.target.value.replace(/\D/g, "");

  // Format angka dengan titik sebagai pemisah ribuan
  e.target.value = formatRupiah(value);
});

function formatRupiah(angka) {
  return angka.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
document.querySelectorAll(".field-number").forEach(function (input) {
  input.addEventListener("input", function (e) {
    // Hapus semua karakter selain angka
    let angka = e.target.value.replace(/\D/g, "");
    console.log(angka);
  });
});
