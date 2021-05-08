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
    <form action="zad2.php" method="post">

        <label>First Name:</label>
        <input type="text" name="firstName" placeholder="First Name" required>
        <br>
        <label>Last Name:</label>
        <input type="text" name="lastName" placeholder="Last Name" required>
        <br>
        <label>E-mail adress:</label>
        <input type="email" name="email" placeholder="Email" required>
        <br>
        <input type="submit" name="send" value="Save into file">
    </form>

    <?php

if (isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["email"])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];

    if (file_put_contents('zad2_store.txt', $firstName . "\n" . $lastName . "\n" . $email . "\n", FILE_APPEND) === false) {
        echo "Error. Something went wrong!";
    } else {
        echo "Saved :)";
    }
}

?>
</body>
</html>
