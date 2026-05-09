<!DOCTYPE html>
<body>
    <form action="" method="POST">
        Batas Bawah : <input type="text" name="batasBawah"><br>
        Batas Atas : <input type="text" name="batasAtas"><br>
        <input type="submit" value="Cetak" name="cetak">
    </form>
</body>

<?php
    if(isset($_POST["cetak"])){
        $batas_bawah = intval($_POST["batasBawah"]);
        $batas_atas = intval($_POST["batasAtas"]);

        $i = 0;
        echo "<br>";
        do {
            if(($batas_bawah + 7) % 5 === 0){
                echo"<img src='star-images.png' width='20' height='20'>";
            }
            else {
                echo"$batas_bawah ";
            }
            $batas_bawah++;
        } while ($batas_bawah <= $batas_atas);
    }
?>