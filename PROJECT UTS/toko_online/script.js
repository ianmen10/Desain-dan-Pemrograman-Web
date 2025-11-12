// script.js — keranjang di localStorage
const STORAGE_KEY = "tokoIlhamKeranjang";

let keranjang = JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];

// tambah produk ke keranjang (jika ada -> jumlah++)
function tambahKeKeranjang(nama, harga) {
  const idx = keranjang.findIndex(i => i.nama === nama);
  if (idx >= 0) {
    keranjang[idx].jumlah += 1;
  } else {
    keranjang.push({ nama, harga: Number(harga), jumlah: 1 });
  }
  simpanDanRender();
}

// simpan ke localStorage dan render ulang
function simpanDanRender() {
  localStorage.setItem(STORAGE_KEY, JSON.stringify(keranjang));
  tampilkanKeranjang();
}

// render daftar keranjang
function tampilkanKeranjang() {
  const daftar = document.getElementById("daftar-keranjang");
  daftar.innerHTML = "";
  let total = 0;

  if (keranjang.length === 0) {
    daftar.innerHTML = "<li>(Keranjang kosong)</li>";
    document.getElementById("total-harga").textContent = `Total: Rp 0`;
    return;
  }

  keranjang.forEach((item, index) => {
    const subtotal = item.harga * item.jumlah;
    total += subtotal;

    const li = document.createElement("li");
    li.innerHTML = `
      <div class="cart-row">
        <span class="cart-name">${escapeHtml(item.nama)}</span>
        <span class="cart-price">Rp ${item.harga.toLocaleString("id-ID")}</span>
        <input type="number" min="1" value="${item.jumlah}" class="cart-qty" onchange="ubahJumlah(${index}, this.value)">
        <span class="cart-sub">Rp ${subtotal.toLocaleString("id-ID")}</span>
        <button class="btn-delete" onclick="hapusItem(${index})">Hapus</button>
      </div>
    `;
    daftar.appendChild(li);
  });

  document.getElementById("total-harga").textContent = `Total: Rp ${total.toLocaleString("id-ID")}`;
}

// ubah jumlah item (update)
function ubahJumlah(index, value) {
  const v = parseInt(value);
  if (isNaN(v) || v < 1) {
    alert("Jumlah minimal 1");
    tampilkanKeranjang();
    return;
  }
  keranjang[index].jumlah = v;
  simpanDanRender();
}

// hapus item
function hapusItem(index) {
  if (!confirm("Yakin ingin menghapus item ini?")) return;
  keranjang.splice(index, 1);
  simpanDanRender();
}

// checkout (kosongkan keranjang)
function checkout() {
    const total = keranjang.reduce((sum, item) => sum + item.harga, 0);
    const nama = prompt("Masukkan nama Anda:");

    fetch('checkout.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ nama, total, produk: keranjang })
    })
    .then(res => res.json())
    .then(res => {
        if (res.status === "success") {
            alert("Checkout berhasil! Terima kasih telah berbelanja.");
            keranjang = [];
            tampilkanKeranjang();
        }
    });
}


// helper untuk escape HTML (keamanan)
function escapeHtml(text) {
  return String(text)
    .replaceAll("&", "&amp;")
    .replaceAll("<", "&lt;")
    .replaceAll(">", "&gt;")
    .replaceAll('"', "&quot;")
    .replaceAll("'", "&#039;");
}

// inisialisasi render saat page load
window.addEventListener('load', tampilkanKeranjang);
