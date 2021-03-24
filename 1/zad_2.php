<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad2</title>
    <style>
        html {
            background: #565555;
            color: #FFF;
        }
    </style>
</head>
<body>
<form action="zad_2.php" method="POST">
    <label>PODAJ BOK A: <input type="number" name="a"></label>
    <br />
    <label>PODAJ BOK B: <input type="number" name="b"></label>
    <br />
    <input type="submit" name="submit">
    <br />
</form>

<?php
if (isset($_POST['a']) &&
    isset($_POST['b']) &&
    !empty($_POST['a']) &&
    !empty($_POST['b']) &&
    $_POST['a'] > 0 &&
    $_POST['b'] > 0
) {
    $a = $_POST['a'];
    $b = $_POST['b'];

    echo "POLE PROSTOKĄTA WYNOSI: " . ($a * $b);

} else {
    echo "BŁĄD";
}

?>
</body>
</html>