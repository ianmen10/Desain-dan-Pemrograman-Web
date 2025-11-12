<?php
include 'koneksi.php';
$id = $_GET['id'];
$result = pg_query($conn, "SELECT * FROM produk WHERE id=$id");
$row = pg_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    $query = "UPDATE produk SET nama='$nama', harga='$harga', deskripsi='$deskripsi' WHERE id=$id";
    pg_query($conn, $query);

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Produk</title>
    </head>
    <body>
        <h2>Edit Produk</h2>
        <form method="POST">
            Nama: <input type="text" name="nama" value="<?= $row['nama'] ?>" required><br><br>
            Harga: <input type="number" name="harga" value="<?= $row['harga'] ?>" required><br><br>
            Deskripsi: <textarea name="deskripsi"><?= $row['deskripsi'] ?></textarea><br><br>
            <input type="submit" name="submit" value="Update">
        </form>
    </body>
</html>