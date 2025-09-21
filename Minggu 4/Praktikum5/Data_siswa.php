<?php
// Data siswa (nama, nilai)
$siswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];

// Hitung total nilai
$total = 0;
foreach ($siswa as $data) {
    $total += $data[1];
}

// Hitung rata-rata
$rata = $total / count($siswa);

// Tampilkan rata-rata
echo "Rata-rata kelas: " . round($rata, 2) . "<br>";
echo "Siswa dengan nilai di atas rata-rata:<br>";

// Cari siswa di atas rata-rata
foreach ($siswa as $data) {
    if ($data[1] > $rata) {
        echo "- {$data[0]} (nilai: {$data[1]})<br>";
    }
}
?>
