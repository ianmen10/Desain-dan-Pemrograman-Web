<?php
$totalKursi = 45;
$terisi     = 28;

$kosong = $totalKursi - $terisi;
$persenKosong = ($kosong / $totalKursi) * 100;

echo "Total kursi: $totalKursi<br>";
echo "Kursi terisi: $terisi<br>";
echo "Kursi kosong: $kosong<br>";
echo "Persentase kursi kosong: " . round($persenKosong, 2) . "%<br>";
?>
