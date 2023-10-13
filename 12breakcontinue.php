<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break and Continue in PHP</title>
</head>
<body>
    <?php
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) { // terminate after 4.
            break;
        }
    echo "The number is: $x <br>";
    }

    echo "<br><br>";
    for ($x = 0; $x < 7; $x++) {
        if ($x == 4) { // 4 will not print here
          continue;
        }
        echo "The number is: $x <br>";
    }
    ?> 
</body>
</html>