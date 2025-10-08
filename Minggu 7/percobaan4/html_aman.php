<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    

    <?php
    if (isset($_POST['input'])) {

        // Ambil data mentah
        $input_mentah = $_POST['input'];

        // TIDAK ADA PENGAMANAN (Kode dari Langkah 2 diabaikan pada output)

        // Tampilkan input MENTAH, yang rentan terhadap serangan
        echo "<h3>Hasil Input Mentah (RENTAN):</h3>";
        echo "<div style='border: 1px solid red; padding: 10px;'>";
        echo $input_mentah; // Menampilkan input mentah
        echo "</div>";
    }
    ?>

    <form method="POST" action="html_aman_kerentanan.php">
        <label for="input">Masukkan Teks Pengujian:</label><br>
        <input type="text" id="input" name="input" size="80" placeholder="Masukkan: <script>alert('Di-hack!')</script>"><br><br>
        <input type="submit" value="Kirim Input">
    </form>

</body>
</html>