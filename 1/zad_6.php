<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad6</title>
    <style>
        html {
            background: #565555;
            color: #FFF;
        }
    </style>
</head>
<body>
<form action="zad_6.php" method="POST">
    <label>PODAJ A: <input type="number" name="a"></label>
    <br />
    <label>PODAJ B: <input type="number" name="b"></label>
    <br />
    <label>PODAJ C: <input type="number" name="c"></label>
    <br />
    <input type="submit" name="submit">
    <br /><br />
</form>

<?php

if (isset($_POST['a']) &&
    isset($_POST['b']) &&
    isset($_POST['c']) &&
    !empty($_POST['a']) &&
    !empty($_POST['b']) &&
    !empty($_POST['c']) &&
    $_POST['a'] > 0 &&
    $_POST['b'] > 0 &&
    $_POST['c'] > 0
) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if ($a + $b > $c &&
        $b + $c > $a &&
        $a + $c > $b
    ) {
        echo "DA SIĘ ZBUDOWAĆ TRÓJKĄT";
    } else {
        echo "NIE DA SIĘ ZBUDOWAĆ TRÓJKĄTA";
    }

} else {
    echo "BŁĄD";
}

?>

</body>
</html>
