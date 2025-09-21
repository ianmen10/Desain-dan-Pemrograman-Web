<?php
$nilai_siswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Urutkan dari kecil ke besar
sort($nilai_siswa);

// Hilangkan 2 nilai terendah dan 2 nilai tertinggi
$nilai_dipakai = array_slice($nilai_siswa, 2, count($nilai_siswa) - 4);

// Hitung total
$total_nilai = array_sum($nilai_dipakai);

// Tampilkan
echo "Total nilai setelah mengabaikan 2 nilai tertinggi dan 2 nilai terendah adalah: $total_nilai";
?>
