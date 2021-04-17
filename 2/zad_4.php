<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad4</title>
    <style>
        html {
            background: #565555;
            color: #FFF;
        }
    </style>
</head>
<body>
<form action="zad_4.php" method="POST">
    <label>PODAJ LICZBĘ: <input type="number" name="num"></label>
    <br />
    <input type="submit" name="submit">
    <br />
</form>
<?php

function primeCheck($number, &$counter)
{
    $counter = 0;
    if ($number == 1) {
        return 0;
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        ++$counter;
        if ($number % $i == 0) {
            return 0;
        }
    }
    return 1;
}

if (isset($_POST['num']) &&
    !empty($_POST['num']) &&
    $_POST['num'] > 0
) {
    $num = $_POST['num'];
    $counter = 0;
    $flag = primeCheck($num, $counter);
    if (primeCheck($num, $counter) == 1) {
        echo $num . " JEST PIERWSZA." . " <br />POTRZEBA " . $counter . " OBROTÓW PĘTLI";
    } else {
        echo $num . " NIE JEST PIERWSZA" . " <br />POTRZEBA " . $counter . " OBROTÓW PĘTLI";
    }

} else {
    echo "<br />BŁĄD";
}

?>

</body>
</html>