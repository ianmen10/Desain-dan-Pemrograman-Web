// Menangani pengiriman form
document.getElementById("contactForm").addEventListener("submit", function(e) {
  e.preventDefault(); // agar tidak reload halaman
  const name = document.getElementById("name").value;
  const message = document.getElementById("formMessage");
  message.textContent = `Terima kasih, ${name}! Pesanmu sudah terkirim.`;
  message.style.color = "green";

  // Kosongkan form setelah dikirim
  this.reset();
});
