<?php
// Fungsi perkenalan default (tanpa parameter)
function perkenalanDefault() {
    echo "Assalamualaikum, ";
    echo "Perkenalkan, nama saya Elok<br/>"; // ganti sesuai nama kamu
    echo "Senang berkenalan dengan Anda<br/><br/>";
}

// Fungsi hitung umur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// Fungsi perkenalan dengan parameter
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Saya berusia " . hitungUmur(2006, 2025) . " tahun<br/>"; // sesuaikan tahun lahir
    echo "Senang berkenalan dengan Anda<br/><br/>";
}

// -------------------------
// Pemanggilan fungsi
// -------------------------

// Fungsi tanpa parameter
perkenalanDefault();

echo "<hr>";

// Fungsi dengan parameter langsung
perkenalan("Hamdana", "Hallo");

echo "<hr>";

// Fungsi dengan variabel
$saya = "Elok";
$ucapanSalam = "Selamat pagi";
perkenalan($saya, $ucapanSalam);

echo "<hr>";

// Fungsi dengan nilai default
perkenalan("Elok"); 
?>
