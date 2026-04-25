<!DOCTYPE html>
<html lang="id">
<head>
    <style>
        .required {
            color: red;
        }
        .error {
            color: red;
        }
        .output {
            margin-top: 44px;
        }
    </style>
</head>
<body>

<?php
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$nim = isset($_POST['nim']) ? $_POST['nim'] : '';
$jk = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
?>

<form method="POST" action="">
    Nama: <input type="text" name="nama" value="<?= $nama ?>">
    <span class="required">*</span>
    <span class="error">
        <?php if (isset($_POST['submit']) && empty($_POST['nama'])) echo "nama tidak boleh kosong"; ?>
    </span><br>

    Nim: <input type="text" name="nim" value="<?= $nim ?>">
    <span class="required">*</span>
    <span class="error">
        <?php if (isset($_POST['submit']) && empty($_POST['nim'])) echo "nim tidak boleh kosong"; ?>
    </span><br>

    Jenis Kelamin: 
    <span class="required">*</span>
    <span class="error">
        <?php if (isset($_POST['submit']) && empty($_POST['jenis_kelamin'])) echo "jenis kelamin tidak boleh kosong"; ?>
    </span><br>
    <input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php if ($jk == "Laki-Laki") echo "checked"; ?>> Laki-Laki<br>
    <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($jk == "Perempuan") echo "checked"; ?>> Perempuan<br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit']) && !empty($_POST['nama']) && !empty($_POST['nim']) && !empty($_POST['jenis_kelamin'])) {
    echo "<div class='output'>";
    echo "<h3 style='font-size: 24px;'>Output:</h3>";
    echo $nama . "<br>";
    echo $nim . "<br>";
    echo $jk . "<br>";
    echo "</div>";
}
?>

</body>
</html>