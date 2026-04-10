<?php
$samsung = [
    "samsung1" => "Samsung Galaxy S22",
    "samsung2" => "Samsung Galaxy S22+",
    "samsung3" => "Samsung Galaxy A03",
    "samsung4" => "Samsung Galaxy Xcover 5"
];
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border: 1px double black;
        }
        td {
            border: 1px double black;
        }
        .judul {
            background-color: red;
            font-weight: bold;
            font-size: 24px;
            height: 60px;
        }
    </style>
</head>

<body>
<table>
    <tr>
        <td class="judul">Daftar Smartphone Samsung</td>
    </tr>

    <?php
    foreach ($samsung as $unit) {
        echo "<tr><td>$unit</td></tr>";
    }
    ?>

</table>

</body>
</html>