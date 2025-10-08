<html>
    <head>
        <title>Contoh form dengan PHP</title>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form method="POST" action="proses_lanjut.php">
            <label for="buah">Pilih Buah:</label>
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="pisang">Pisang</option>
                <option value="mangga">Mangga</option>
                <option value="jeruk">Jeruk</option>
            </select>

            <br>
            <label>Pilih Warna Favorit</label>
            <input type="Checkbox" name="Warna[]" value="merah"> Merah <br>
            <input type="Checkbox" name="Warna[]" value="biru"> Biru <br>
            <input type="Checkbox" name="Warna[]" value="hijau"> Hijau <br>
            <br>
            <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
            <br>

            <input type="submit" value="submit">
        </form>
    </body>
</html>