let keranjang = [];

function tambahKeKeranjang(nama, harga) {
    keranjang.push({ nama, harga});
    tampilkanKeranjang();
}

function tampilkanKeranjang() {
    const daftar = document.getElementById("daftar-keranjang");
    daftar.innerHTML = "";
    let total = 0;

    keranjang.forEach((item, i) => {
        const li = document.createElement("li");
        li.textContent = `${item.nama} - Rp ${item.harga.toLocaleString("id-ID")}`;
        daftar.appendChild(li);
        total += item.harga;
    })

    document.getElementById("total-harga").textContent = `Total: Rp ${total.toLocaleString("id-ID")}`;
} 

function checkout() {
    if (keranjang.length === 0) {
        alert("Keranjang masih kosong!");
    } else {
        alert("Terima kasih telah berbelanja!");
        keranjang = [];
        tampilkanKeranjang();
    }
}