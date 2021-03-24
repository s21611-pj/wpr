<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad_10</title>
    <style>
        html {
            background: #565555;
            color: #FFF;
        }
    </style>
</head>
<body>
</body>
<form action="zad_10.php" method="POST">
    <label>PODAJ ROZMIAR WZORU: <input type="number" name="size"></label>
    <br />
    <input type="submit" name="submit">
    <br /><br />
</form>


<?php

if (isset($_POST['size']) &&
    !empty($_POST['size']) &&
    $_POST['size'] > 0
) {
    $size = $_POST['size'];

    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo ("*");
        }
        echo ("<br>");
    }

    for ($i = $size; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo ("*");
        }
        echo ("<br>");
    }

    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $size; $j++) {
            if ($j < $i) {
                echo ("&nbsp;&nbsp");
            } else {
                echo ("*");
            }
        }
        echo ("<br>");
    }

    for ($i = $size; $i >= 1; $i--) {
        for ($j = 1; $j <= $size; $j++) {
            if ($j < $i) {
                echo ("&nbsp;&nbsp");
            } else {
                echo ("*");
            }
        }
        echo ("<br>");
    }
} else {
    echo "BŁĄD";
}
?>
</html>