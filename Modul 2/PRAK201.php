<!DOCTYPE html>
<html>
<body>
<form method="post">
    Nama: 1 <input type="text" name="nama1"><br>
    Nama: 2 <input type="text" name="nama2"><br>
    Nama: 3 <input type="text" name="nama3"><br>
    <input type="submit" name="submit" value="Urutkan">
</form>

<?php
if (isset($_POST['submit'])) {
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];

    if ($nama1 > $nama2) { $temp = $nama1; $nama1 = $nama2; $nama2 = $temp; }
    if ($nama1 > $nama3) { $temp = $nama1; $nama1 = $nama3; $nama3 = $temp; }
    if ($nama2 > $nama3) { $temp = $nama2; $nama2 = $nama3; $nama3 = $temp; }

    echo $nama1 . "<br>" . $nama2 . "<br>" . $nama3;
}
?>
</body>
</html>