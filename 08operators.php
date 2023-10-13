<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators in PHP</title>
</head>
<body>
<?php
    // Arithmatic Operator 
    $x = 10;  
    $y = 6;

    echo $x + $y, "<br>";
    echo $x - $y, "<br>";
    echo $x * $y, "<br>";
    echo $x / $y, "<br>";
    echo $x ** $y, "<br>";
    echo $x % $y, "<br>";

    // Assignment Operators
    $x = 100;  
    $y = "100";
    var_dump($x == $y); // equal
    echo "<br>";

    var_dump($x === $y); // identical 
    echo "<br>";

    var_dump($x != $y); // not equal to
    echo "<br>";

    var_dump($x !== $y); // not identical
    echo "<br>";

    var_dump($x >= $y); // greater than or equal to
    echo "<br>";

    $x = 10; $y = 10;
    echo ($x <=> $y); // spaceship operator
    echo "<br>";

    $x = 10;  
    echo ++$x;  // pre increment Operators
    echo "<br>";
    echo $x++; // post increment
    echo "<br>";

    echo --$x; // pre and post decrement
    echo "<br>";
    echo $x--;
?>  

</body>
</html>