<!DOCTYPE html>
<body>
    <form action="" method="POST">
        Jumlah Peserta : <input type="text" name="jumlah"><br>
        <input type="submit" value="Cetak" name="cetak">
    </form>
</body>

<?php
    $jumlah = 1;
    if(isset($_POST["cetak"])){
        $jumlah_peserta = $_POST["jumlah"];
        while($jumlah <= $jumlah_peserta){
            if($jumlah % 2 == 0){
                echo "<h1 style='color: green; font-size: 24px;'>Peserta ke-$jumlah</h1>";
            }
            else {
                echo "<h1 style='color: red; font-size: 24px;'>Peserta ke-$jumlah</h1>";
            }
            $jumlah++;
        }
    }
?>