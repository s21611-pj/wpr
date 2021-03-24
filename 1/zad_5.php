<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad5</title>
    <style>
        html {
            background: #565555;
            color: #FFF;
        }
    </style>
</head>
<body>
<form action="zad_5.php" method="POST">
    <label>PODAJ NAPIS NR 1: <input type="text" name="word_1"></label>
    <br />
    <label>PODAJ NAPIS NR 2: <input type="text" name="word_2"></label>
    <br />

    <input type="submit" name="submit">
    <br /><br />
</form>
<?php
if (isset($_POST['word_1']) &&
    isset($_POST['word_2']) &&
    !empty($_POST['word_1']) &&
    !empty($_POST['word_2'])
) {
    $word_1 = $_POST['word_1'];
    $word_2 = $_POST['word_2'];

    echo "\"%" . $word_2 . " " . $word_1 . "%$#\"";

} else {
    echo "BŁĄD";
}

?>

</body>
</html>
