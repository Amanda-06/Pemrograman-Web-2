<!DOCTYPE html>
<body>
    <form action="" method="POST">
        Tinggi : <input type="text" name="tinggi"><br>
        Alamat Gambar : <input type="text" name="gambar"><br>
        <input type="submit" value="Cetak" name="cetak">
    </form>
</body>

<?php
    if(isset($_POST["cetak"])){
        $tinggi = intval($_POST["tinggi"]);
        $url_gambar =$_POST["gambar"];

        echo"<br>";
        $baris = 0;
        $spasi = 0;
        while ($baris < $tinggi) {
            $j = 0;
            while ($j < $spasi) {
                echo "<span style='display:inline-block; width:20px;'></span>";
                $j++;
            }

            while ($j < $tinggi) {
                echo "<img src='$url_gambar' width='20' height='20'>";
                $j++;
            }
            echo "<br>";
            $baris++;
            $spasi++;
        }
    }
?>