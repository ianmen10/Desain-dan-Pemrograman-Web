<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    $query = "INSERT INTO produk (nama, harga, deskripsi) VALUES ('$nama', '$harga', '$deskripsi')";
    pg_query($conn, $query);

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Produk</title>
    </head>
    <body>
        <h2>Tambah Produk</h2>
        <form method="POST">
            Nama: <input type="text" name="nama" required><br><br>
            Harga: <input type="number" name="harga" required><br><br>
            Deskripsi: <textarea name="deskripsi"></textarea><br><br>
            <input type="submit" name="submit" value="Simpan">
        </form>
    </body>
</html>