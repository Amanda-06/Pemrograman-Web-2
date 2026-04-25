<!DOCTYPE html>
<html lang="id">
<body>
    <form action="" method="POST">
        Nilai : <input type="number" name="nilai" min="0" required><br>
        <input type="submit" value="Konversi" name="konversi">
    </form>

    <?php
    if (isset($_POST["konversi"])) {
        $nilai = $_POST["nilai"];
        $hasil = "";

        if ($nilai == 0) {
            $hasil = "Nol";
        } elseif ($nilai > 0 && $nilai < 10) {
            $hasil = "Satuan";
        } elseif ($nilai >= 11 && $nilai < 20) {
            $hasil = "Belasan";
        } elseif ($nilai == 10 || ($nilai >= 20 && $nilai < 100)) {
            $hasil = "Puluhan";
        } elseif ($nilai >= 100 && $nilai < 1000) {
            $hasil = "Ratusan";
        } elseif ($nilai >= 1000) {
            $hasil = "Anda Menginput Melebihi Limit Bilangan";
        }

        echo "<h2>Hasil: $hasil</h2>";
    }
    ?>
</body>
</html>