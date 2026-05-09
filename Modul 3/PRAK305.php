<!DOCTYPE html>
<body>
    <form action="" method="POST">
        <input type="text" name="input">
        <input type="submit" value="submit" name="submit">
    </form>
</body>

<?php
    if(isset($_POST["submit"])){
        $output = "";
        $input = $_POST["input"];
        $jumlah_karakter = strlen($input);

        for ($i = 0; $i < $jumlah_karakter; $i++){
            $karakter = $input[$i];

            if(ctype_space($karakter)){
                continue;
            }

            $result = strtoupper($karakter) . str_repeat(strtolower($karakter), $jumlah_karakter - 1);
            $output = $output . $result;
        }

        echo "<p><strong>Input:</strong><br><br>$input</p>";
        echo "<p><strong>Output:</strong><br><br>$output</p>";
    }
?>