<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting array in PHP</title>
</head>
<body>
<?php
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    $clength = count($cars);
    for($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }

    rsort($cars);
    $clength = count($cars);
    for($x = 0; $x < $clength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort($age);
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    // for reverse use arsort()

    ksort($age);
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    // for reverse use krsort()
?> 
</body>
</html>