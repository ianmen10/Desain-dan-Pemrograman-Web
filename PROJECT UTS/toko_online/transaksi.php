<?php
include 'koneksi.php';
$result = pg_query($conn, "SELECT * FROM transaksi ORDER BY id DESC");
?>
<h2>Daftar Transaksi</h2>
<table border="1">
<tr><th>ID</th><th>Nama</th><th>Total</th><th>Tanggal</th></tr>
<?php while ($row = pg_fetch_assoc($result)): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= htmlspecialchars($row['nama_pelanggan']) ?></td>
    <td>Rp <?= number_format($row['total_harga'], 0, ',', '.') ?></td>
    <td><?= $row['tanggal'] ?></td>
</tr>
<?php endwhile; ?>
</table>
