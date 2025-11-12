<?php
include 'koneksi.php';
$id = $_GET['id'];
pg_query($conn, "DELETE FROM produk WHERE id=$id");
header("Location: index.php");
?>
