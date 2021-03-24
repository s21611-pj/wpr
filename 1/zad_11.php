<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad11</title>
    <style>
        html {
            background: #565555;
            color: #FFF;
        }
    </style>
</head>
<body>
<?php

function isPangram($sentence)
{
    $formatSent = strtolower(str_replace(' ', '', $sentence));
    $letterArr = str_split($formatSent);
    $sentWithoutDupl = $letterArr[0];

    for ($i = 0; $i < count($letterArr); $i++) {
        $pos = strpos($sentWithoutDupl, $letterArr[$i]);
        if ($pos === false) {
            $sentWithoutDupl .= $letterArr[$i];
        }
    }
    $countLetters = strlen($sentWithoutDupl);
    echo ($countLetters == 26) ? "\"" . $sentence . "\" is a pangram :)<br>" : "\"" . $sentence . "\" is not a pangram :(<br>";
}

isPangram("The quick brown fox jumps over the lazy dog");
isPangram("Waltz nymph for quick jigs vex Bud");
isPangram("How vexingly quick daft zebras jump");
isPangram("I am Wojtek and this sentence...");

?>
</body>
</html>