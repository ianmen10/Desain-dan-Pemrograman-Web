<?php
$targetDirectory = "images/";
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

$allowedExtensions = array("jpg", "jpeg", "png", "gif");
$maxSize = 5 * 1024 * 1024; // 5 MB
$response = "";

if (isset($_FILES['files']) && $_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $targetFile = $targetDirectory . basename($fileName);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Validasi per file
        if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxSize) {
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                $response .= "File $fileName berhasil diunggah.<br>";
            } else {
                $response .= "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            $response .= "File $fileName tidak valid (bukan gambar atau ukuran > 5MB).<br>";
        }
    }
} else {
    $response = "Tidak ada file yang diunggah.";
}
echo $response; // Kirim semua pesan status sebagai satu respon
?>