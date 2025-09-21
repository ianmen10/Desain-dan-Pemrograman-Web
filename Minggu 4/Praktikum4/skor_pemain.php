<?php
$skor = 540; // misalnya

echo "Total skor pemain adalah: $skor<br>";

// Pakai ternary operator
$hadiah = ($skor > 500) ? "YA, mendapat hadiah tambahan!" : "TIDAK, tidak ada hadiah tambahan.";

echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";
?>
