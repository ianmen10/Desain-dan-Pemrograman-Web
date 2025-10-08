<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="jquery-3.7.1.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
    $(document).ready(function() {
        // Mencegat peristiwa submit form
        $("#myForm").submit(function(event) {
            
            // Ambil nilai input
            var nama = $("#nama").val();
            var email = $("#email").val();
            var valid = true; // Flag untuk status validasi

            // --- Validasi Nama ---
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            // --- Validasi Email ---
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            // --- Mencegah Submit Jika Gagal Validasi ---
            if (!valid) {
                event.preventDefault(); // Menghentikan pengiriman form jika validasi gagal
            }
            
            // Catatan: Untuk implementasi AJAX (Soal 7.3), logika pengiriman data AJAX
            // akan ditambahkan di sini, di dalam blok 'if (valid)'.
            
        });
    });
    </script>
</body>
</html>