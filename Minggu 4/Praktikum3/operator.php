<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali   = $a * $b;
$hasilBagi   = $a / $b;
$sisaBagi    = $a % $b;
$pangkat     = $a ** $b;

// Tampilkan hasil
echo "Hasil Penjumlahan $a + $b = $hasilTambah<br>";
echo "Hasil Pengurangan $a - $b = $hasilKurang<br>";
echo "Hasil Perkalian $a * $b = $hasilKali<br>";
echo "Hasil Pembagian $a / $b = $hasilBagi<br>";
echo "Sisa Bagi $a % $b = $sisaBagi<br>";
echo "Pangkat $a ** $b = $pangkat<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// Operator perbandingan
$hasilSama           = ($a == $b);
$hasilTidakSama      = ($a != $b);
$hasilLebihKecil     = ($a < $b);
$hasilLebihBesar     = ($a > $b);
$hasilLebihKecilSama = ($a <= $b);
$hasilLebihBesarSama = ($a >= $b);

// Tampilkan hasil dengan var_dump supaya jelas true/false
echo "Apakah $a == $b ? "; var_dump($hasilSama); echo "<br>";
echo "Apakah $a != $b ? "; var_dump($hasilTidakSama); echo "<br>";
echo "Apakah $a < $b ? "; var_dump($hasilLebihKecil); echo "<br>";
echo "Apakah $a > $b ? "; var_dump($hasilLebihBesar); echo "<br>";
echo "Apakah $a <= $b ? "; var_dump($hasilLebihKecilSama); echo "<br>";
echo "Apakah $a >= $b ? "; var_dump($hasilLebihBesarSama); echo "<br>";

// Operator logika
$hasilAnd  = ($a && $b);
$hasilOr   = ($a || $b);
$hasilNotA = (!$a);
$hasilNotB = (!$b);

echo "\$a = $a, \$b = $b<br>";
echo "Hasil AND (\$a && \$b): "; var_dump($hasilAnd); echo "<br>";
echo "Hasil OR (\$a || \$b): "; var_dump($hasilOr); echo "<br>";
echo "Hasil NOT A (!\$a): "; var_dump($hasilNotA); echo "<br>";
echo "Hasil NOT B (!\$b): "; var_dump($hasilNotB); echo "<br>";

echo "Nilai awal: a = $a, b = $b<br><br>";

$a += $b; // sama dengan $a = $a + $b
echo "Setelah a += b, nilai a = $a<br>";

$a -= $b; // sama dengan $a = $a - $b
echo "Setelah a -= b, nilai a = $a<br>";

$a *= $b; // sama dengan $a = $a * $b
echo "Setelah a *= b, nilai a = $a<br>";

$a /= $b; // sama dengan $a = $a / $b
echo "Setelah a /= b, nilai a = $a<br>";

$a %= $b; // sama dengan $a = $a % $b
echo "Setelah a %= b, nilai a = $a<br>";

$hasilIdentik       = ($a === $b);
$hasilTidakIdentik  = ($a !== $b);

echo "\$a = $a (tipe: " . gettype($a) . "), ";
echo "\$b = $b (tipe: " . gettype($b) . ")<br><br>";

echo "Apakah \$a === \$b ? "; var_dump($hasilIdentik); echo "<br>";
echo "Apakah \$a !== \$b ? "; var_dump($hasilTidakIdentik); echo "<br>";
?>

