<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
</head>
<body>
<?php
    // simple array or Indexed arrays
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

    // count() function
    echo "<br>";
    echo count($cars);

    // traverse index array using loop
    $arrlength = count($cars);
    for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }

    // Associative array
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    // Multi dimensional array
    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }

?> 
</body>
</html>