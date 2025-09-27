<?php
/*
$pesan = "Saya arek malang";
echo strrev($pesan) . "<br>";
*/

$pesan = "saya arek malang";

// pecah string menjadi array kata
$pesanPerKata = explode(" ", $pesan);

// balik urutan array kata
$pesanPerKata = array_reverse($pesanPerKata);

// gabungkan kembali menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br/>";

?>