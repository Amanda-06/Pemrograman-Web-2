<!DOCTYPE html>
<body>
    <?php
    $jumlah_bintang = 0;

    if (isset($_POST["Submit"])) {
        $jumlah_bintang = intval($_POST["bintang"]);
    } 
    elseif (isset($_POST["Tambah"])) {
        $jumlah_bintang = intval($_POST["jumlah"]) + 1;
    } 
    elseif (isset($_POST["Kurang"])) {
        $jumlah_bintang = max(0, intval($_POST["jumlah"]) - 1);
    }

    if (isset($_POST["submit"]) || isset($_POST["Tambah"]) || isset($_POST["Kurang"])) {
        echo "Jumlah bintang $jumlah_bintang<br><br><br>"; 
        for ($i = 0; $i < $jumlah_bintang; $i++) {
            echo "<img src='star-images.png' width='73' height='73'>";
        }

        echo "
        <form method='POST' style='margin-top: 0px;'>
            <input type='hidden' name='jumlah' value='$jumlah_bintang'>
            <input type='submit' name='Tambah' value='Tambah' style='margin-right: -4px;'>
            <input type='submit' name='Kurang' value='Kurang'>
        </form>
        ";
    } else {
    ?>
        <form method="POST">
            Jumlah bintang : <input type="text" name="bintang"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    <?php
    }
    ?>
</body>