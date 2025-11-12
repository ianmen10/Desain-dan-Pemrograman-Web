<?php
include 'koneksi.php';

// ambil data produk dari DB
$query = "SELECT id, nama, harga, deskripsi FROM produk ORDER BY id ASC";
$res = q($query); // menggunakan fungsi q() dari koneksi.php
$produk = pg_fetch_all($res) ?: [];

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online Ilham</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>🛒 Toko Online Ilham</h1>
    <nav>
        <a href="#produk">Produk</a>
        <a href="#keranjang">Keranjang</a>
        <form action="logout.php" method="post" style="display:inline;">
            <button type="submit">Logout</button>
        </form>

    </nav>
</header>

<main>
    <section id="produk" class="produk-section">
        <h2>Daftar Produk</h2>
        <div class="produk-list">
            <?php foreach ($produk as $p): 
                $nama_js = addslashes($p['nama']);
                $harga = (int)$p['harga'];
            ?>
            <div class="produk">
                <?php
                ?>
                <img src="<?= htmlspecialchars($p['gambar'] ?? strtolower(preg_replace('/\s+/', '', $p['nama'])) . '.jpg') ?>" alt="<?= htmlspecialchars($p['nama']) ?>">
                <h3><?= htmlspecialchars($p['nama']) ?></h3>
                <p>Rp <?= number_format($harga, 0, ',', '.') ?></p>
                <button onclick="tambahKeKeranjang('<?= $nama_js ?>', <?= $harga ?>)">Tambah ke Keranjang</button>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="keranjang" class="keranjang-section">
        <h2>Keranjang Belanja</h2>
        <ul id="daftar-keranjang"></ul>
        <p id="total-harga">Total: Rp 0</p>
        <button id="checkout-btn" onclick="checkout()">Checkout</button>
    </section>
</main>
<footer>
    <p>&copy; 2025 Ilham Dharma Atmaja - Toko Online Sederhana</p>
</footer>

<script src="script.js"></script>
</body>
</html>
