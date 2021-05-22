<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad3</title>
    <style>
        html {
            background: #565555;
            color: #FFF;
        }

        table, th, td {
            border: 1px solid white;
        }
    </style>
</head>
<body>

    <?php
session_start();

echo (
    '<form action="zad1.php" method="post">

        <label>Select number of guests (max 4): </label>
        <select name="guestsNumber">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
        </select>
        <br>
        <label>First Name:</label>
        <input type="text" name="firstName" placeholder="First Name" required>
        <br>
        <label>Last Name:</label>
        <input type="text" name="lastName" placeholder="Last Name" required>
        <br>
        <label>E-mail adress:</label>
        <input type="email" name="email" placeholder="Email" required>
        <br>
        <label>Adress:</label>
        <input type="text" name="address" placeholder="Address">
        <br>
        <label>Credit Card:</label>
        <input type="tel" inputmode="numeric" name="cardNumber" pattern="[0-9\s]{13,19}" autocomplete="CreditCard-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" required>
        <br>
        <label>Check in:</label>
        <input type="datetime-local" name="checkInDateTime" required>
        <br>
        <label>Check out:</label>
        <input type="datetime-local" name="checkOutDateTime" required>
        <br>
        <label>Child bed?: </label>
        <label for=ChildBedNo> No </label>
        <input type="radio" id="ChildBedNo" name="childBed" value="No" checked>
        <label for=ChildBedYes> Yes </label>
        <input type="radio" id="ChildBedYes" name="childBed" value="Yes">
        <br>
        <label> Extras: </label>
        <br>
        <input type="checkbox" id="airConditioning" name="airConditioning" value="Yes">
        <input id="testHiddenAirCond" type="hidden" value="No" name="airConditioning">
        <label for="AirConditioning"> Air Conditioning</label><br>
        <input type="checkbox" id="ashtray" name="ashtray" value="Yes">
        <input id="testNameHidden" type="hidden" value="No" name="ashtray">
        <label for="Ashtray"> Ashtray</label><br>
        <input type="submit" name="send" value="Send and save into CSV file">'

);

if (isset($_POST['send'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $cardNumber = $_POST['cardNumber'];
    $checkInDateTime = $_POST['checkInDateTime'];
    $checkOutDateTime = $_POST['checkOutDateTime'];
    $childBed = $_POST['childBed'];
    $airConditioning = $_POST['airConditioning'];
    $ashtray = $_POST['ashtray'];
    $guestsNumber = $_POST['guestsNumber'];
    setcookie("guestsNumber", $guestsNumber, time() + 60 + 60 + 24 + 28);

    if (!file_exists('zad3_db.csv')) {
        $fp = fopen('zad3_db.csv', 'w');
        fputcsv($fp, array('firstName', 'lastName', 'email', 'address', 'cardNumber', 'checkInDateTime', 'checkOutDateTime', 'childBed', 'airConditioning', 'ashtray', 'guestsNumber'));
        fclose($fp);
    }

    $list = array($firstName, $lastName, $email, $address, $cardNumber, $checkInDateTime, $checkOutDateTime, $childBed, $airConditioning, $ashtray, $guestsNumber);

    if (!$fp = fopen('zad1_db.csv', 'a')) {
        echo "Error";
    } else {
        fputcsv($fp, $list);
        fclose($fp);
    }

    echo "<br><br><center><table>\n\n";
    $fp = fopen("zad1_db.csv", "r");
    while (($data = fgetcsv($fp)) !== false) {

        echo "<tr>";
        foreach ($data as $i) {
            echo "<td>" . htmlspecialchars($i)
                . "</td>";
        }
        echo "</tr> \n";
    }

    fclose($fp);

    echo "\n</table></center>";
}
session_destroy();
?>
</body>
</html>