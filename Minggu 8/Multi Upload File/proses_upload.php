<?php
$targetDirectory = "images/"; 
$allowedExtensions = array("jpg", "jpeg", "png", "gif");
$maxSize = 5 * 1024 * 1024; // Maksimal 5 MB

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if (isset($_FILES['files']) && $_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $targetFile = $targetDirectory . basename($fileName);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxSize) {
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            // Pesan jika file tidak valid
            echo "File $fileName tidak valid (bukan gambar atau ukuran > 5MB).<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>