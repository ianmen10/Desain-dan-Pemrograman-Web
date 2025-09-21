<?php
$hargaBelanja = 120000;  // misalnya
$diskon = 0;

if ($hargaBelanja > 100000) {
    $diskon = 0.20 * $hargaBelanja;
}

$hargaBayar = $hargaBelanja - $diskon;

echo "Total belanja: Rp " . number_format($hargaBelanja, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Yang harus dibayar: Rp " . number_format($hargaBayar, 0, ',', '.');
?>
