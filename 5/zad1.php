<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad1 - mysql db</title>
</head>
<body>
<?php
if (!$db = mysqli_connect("localhost", "root", "", "wpr", "3307")) {
    exit("Nie udało się połączyć");
} else {
    echo "Udało się połączyć";
}
echo "</br>";
$query = 'select * from movie';
if (!$result = mysqli_query($db, $query)) {
    echo "Nie udało się";
} else {
    echo "Udało się";
}
echo "</br>";
while ($rows = mysqli_fetch_row($result)) {
    foreach ($rows as $row) {
        echo $row;
        echo "</br>";
    }
}

if ($result = mysqli_query($db, $query)) {
    $row_count = mysqli_num_rows($result);
    printf("Jest %d rekordów\n", $row_count);
}

echo "</br>";

$result = mysqli_query($db, $query);
while ($r = mysqli_fetch_array($result)) {
    echo $r['ID'] . "<br/>";
}

echo "</br>";
$insert = 'insert into movie (ID, movieName, movieDirector, movieCategory, movieYear) values (4, "Kiler", "Juliusz Machulski", "Comedy", 1997)';
if (mysqli_query($db, $insert)) {
    echo "Udało się dodać rekord";
} else {
    echo "Błąd";
}
echo "</br>";
$rowsnum = mysqli_affected_rows($db);
echo "Liczba dodanych rekordów: $rowsnum"
?>
</body>
</html>