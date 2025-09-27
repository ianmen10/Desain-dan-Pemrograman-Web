<?php
/*
for ($i=1; $i <=25; $i++){
    echo "Perulangan ke-{$i} <br>";
}


function tampilkanAngka (int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    //panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

tampilkanAngka(20);
*/

$menu = [
    ["nama" => "Beranda"],
    ["nama" => "Berita", "subMenu" => [
        ["nama" => "Wisata", "subMenu" => [
            ["nama" => "Pantai"],
            ["nama" => "Gunung"]
        ]],
        ["nama" => "Kuliner"],
        ["nama" => "Hiburan"]
    ]],
    ["nama" => "Tentang"],
    ["nama" => "Kontak"]
];

// Fungsi rekursif untuk menampilkan menu
function tampilMenu($menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>" . $item["nama"];
        if (isset($item["subMenu"])) {
            tampilMenu($item["subMenu"]); // rekursif
        }
        echo "</li>";
    }
    echo "</ul>";
}

// Panggil fungsi
tampilMenu($menu);

?>  