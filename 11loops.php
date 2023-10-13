<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in PHP</title>
</head>
<body>
    <?php    
    // while locale
    echo "<h3>The while loop is:</h3>", "<br>";
    $x = 1;
    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }

    // do while loop
    echo "<h3>The do while loop is:</h3>", "<br>";
    $a = 1;
    do {
    echo "The number is: $a <br>";
    $a++;
    } while ($a <= 5);

    // for loop
    echo "<h3>The for loop is:</h3>", "<br>";
    for ($x = 0; $x <= 5; $x++) {
        echo "The number is: $x <br>";
    } 

    // foreach loop
    $age = array("A"=>"35", "B"=>"37", "C"=>"43");
    echo "<h3>The for each loop is:</h3>", "<br>";
    foreach($age as $x => $val) {
        echo "$x = $val<br>";
    }
?>
</body>
</html>