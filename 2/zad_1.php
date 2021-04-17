<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad1</title>
    <style>
        html {
            background: #565555;
            color: #FFF;
        }
    </style>
</head>
<body>
<form action="zad_1.php" method="POST">
    <label>PODAJ PIERWSZĄ LICZBĘ: <input type="number" name="num_1"></label>
    <br />
    <label>PODAJ DRUGĄ LICZBĘ: <input type="number" name="num_2"></label>
    <br />
    <input type="submit" name="submit">
    <br />
    <label>Input type of action: </label>
	<select name="action">
        <option value="addition">DODAWANIE</option>
        <option value="subtraction">ODEJMOWANIE</option>
        <option value="multiplication">MNOŻENIE</option>
        <option value="division">DZIELENIE</option>
	</select>
</form>
<?php
if (isset($_POST['num_1']) &&
    isset($_POST['num_2']) &&
    !empty($_POST['num_1']) &&
    !empty($_POST['num_2'])
) {

    $num_1 = $_POST['num_1'];
    $num_2 = $_POST['num_2'];
    $action = $_POST['action'];

    switch ($action) {
        case $action === "addition":
            echo ("<br />DODAWANIE: " . ($num_1 + $num_2));
            break;
        case $action === "subtraction":
            echo ("<br />ODEJMOWANIE: " . ($num_1 - $num_2));
            break;
        case $action === "multiplication":
            echo "<br />MNOŻENIE: " . ($num_1 * $num_2);
            break;
        case $action === "division":
            if ($num_2 == 0) {
                echo ("<br />NIE MOŻNA DZIELIĆ PRZEZ ZERO!!!!");
            } else {
                echo "<br />DZIELENIE: " . round(($num_1 / $num_2), 2);
            }
            break;
        default:
            break;
    }
} else {
    echo "<br />BŁĄD";
}

?>

</body>
</html>
