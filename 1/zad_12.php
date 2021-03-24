<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad_12</title>
    <style>
        html {
            background: #565555;
            color: #FFF;
        }
    </style>
</head>
<body>
<form action="zad_12.php" method="POST">
    <label>PODAJ LICZBĘ WIERSZY: <input type="number" name="row"></label>
    <br />
    <label>PODAJ LICZBĘ KOLUMN: <input type="number" name="column"></label>
    <br />
    <input type="submit" name="submit">
    <br /><br />
</form>
</body>

<?php
if (isset($_POST['row']) &&
    isset($_POST['column']) &&
    !empty($_POST['row']) &&
    !empty($_POST['column']) &&
    $_POST['row'] > 0 &&
    $_POST['column'] > 0
) {
    echo "LICZBA WIERSZY: " . $_POST['row'] . "<br />";
    echo "LICZBA KOLUMN: " . $_POST['column'] . "<br />";

    $rows = $_POST['row'];
    $columns = $_POST['column'];

    $matrix = array(array());
    $transposedMatrix = array(array());
    $x = 10;

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            $matrix[$i][$j] = $x += 2;
        }
    }

    echo "<br>PRZED TRANSPOZYCJĄ<br>";
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            echo "[" . $matrix[$i][$j] . "] ";
        }
        echo "<br>";
    }

// transpose
    echo "<br>PO TRANSPOZYCJI<br>";
    for ($i = 0; $i < $columns; $i++) {
        for ($j = 0; $j < $rows; $j++) {
            $transposedMatrix[$i][$j] = $matrix[$j][$i];
            echo "[" . $transposedMatrix[$i][$j] . "] ";
        }
        echo "<br>";
    }
} else {
    echo "BŁĄD";
}

?>
</html>