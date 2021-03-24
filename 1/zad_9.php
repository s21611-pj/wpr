<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad_9</title>
    <style>
        html {
            background: #565555;
            color: #FFF;
        }
    </style>
</head>
<body>
<form action="zad_9.php" method="POST">
    <label>PODAJ DŁUGOŚĆ TABLICY NR 1: <input type="number" name="arr1_length"></label>
    <br />
    <label>PODAJ DŁUGOŚĆ TABLICY NR 2: <input type="number" name="arr2_length"></label>
    <br />
    <input type="submit" name="submit">
    <br /><br />
</form>
</body>

<?php

define("ARR_1_TRANSPOSED_WIDTH", 1);

if (isset($_POST['arr1_length']) &&
    isset($_POST['arr2_length']) &&
    !empty($_POST['arr1_length']) &&
    !empty($_POST['arr2_length']) &&
    $_POST['arr1_length'] > 0 &&
    $_POST['arr2_length'] > 0
) {

    echo "DŁUGOŚĆ TABLICY NR 1: " . $_POST['arr1_length'] . "<br />";
    echo "DŁUGOŚĆ TABLICY NR 2: " . $_POST['arr2_length'] . "<br />";

    $arr1_length = $_POST['arr1_length'];
    $arr1 = array();

    $arr2_length = $_POST['arr2_length'];
    $arr2 = array();

    if ($arr1_length == $arr2_length) {
        $vectorMultiplication = 0;
        for ($i = 0; $i < $arr1_length; $i++) {
            $arr1[$i] = rand(1, 10);
            $arr2[$i] = rand(1, 10);
            $vectorMultiplication += $arr1[$i] * $arr2[$i];
        }
        print_r($arr1);
        echo "<br />";
        print_r($arr2);
        echo "<br />";
        echo ("Iloczyn skalarny wynosi: " . $vectorMultiplication);
        echo "<br />";
    } else {
        $_arrMultiplication = array(array());

        for ($i = 0; $i < $arr1_length; $i++) {
            $arr1[$i][0] = rand(1, 10);
        }
        for ($i = 0; $i < $arr2_length; $i++) {
            $arr2[0][$i] = rand(1, 10);
        }
        print_r($arr1);
        echo "<br />";
        print_r($arr2);
        echo "<br /><br />";

        for ($i = 0; $i < $arr1_length; $i++) { /* wiersze A */
            for ($j = 0; $j < $arr2_length; $j++) { /* kolumny B */
                $_arrMultiplication[$i][$j] = 0;
                for ($k = 0; $k < ARR_1_TRANSPOSED_WIDTH; $k++) { /* kolumny A */
                    $_arrMultiplication[$i][$j] += $arr1[$i][$k] * $arr2[$k][$j];
                }
                echo ("[" . $_arrMultiplication[$i][$j] . "]");
            }
            echo ("<br />");
        }
        echo "Iloczyn dwóch wektorów o różnej długości jest macierzą :)";
        // print_r($_arrMultiplication);
    }
} else {
    echo "BŁĄD";
}

?>
</html>

<!-- zadania z obsluga bledow - 6,7,9,12 -->