<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad_7</title>
    <style>
        html {
            background: #565555;
            color: #FFF;
        }
    </style>
</head>
<body>
<form action="zad_7.php" method="POST">
    <label>PODAJ LICZBĘ od 1 do 12: <input type="number" name="month"></label>
    <br />
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['month']) &&
    !empty($_POST['month']) &&
    $_POST['month'] > 0 &&
    $_POST['month'] < 13
) {
    $month = $_POST['month'];

    switch ($month) {
        case 1:
            echo "STYCZEŃ 31 DNI";
            break;
        case 2:
            echo "LUTY 28 DNI";
            break;
        case 3:
            echo "MARZEC 31 DNI";
            break;
        case 4:
            echo "KWIECIEŃ 30 DNI";
            break;
        case 5:
            echo "MAJ 31 DNI";
            break;
        case 6:
            echo "CZERWIEC 30 DNI";
            break;
        case 7:
            echo "LIPIEC 31 DNI";
            break;
        case 8:
            echo "SIERPIEŃ 31 DNI";
            break;
        case 9:
            echo "WRZESIEŃ 30 DNI";
            break;
        case 10:
            echo "PAŹDZIERNIK 31 DNI";
            break;
        case 11:
            echo "LISTOPAD 30 DNI";
            break;
        case 12:
            echo "GUDZIEŃ 31 DNI";
            break;
        default:
            break;
    }
} else {
    echo "BŁĄD";
}
?>

</body>
</html>
