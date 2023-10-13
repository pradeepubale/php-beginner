<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data types in PHP</title>
</head>
<body>
<?php
    // php string
    $x = "Hello world!";
    $y = 'Hello PHP!';

    echo $x;
    echo "<br>";
    echo $y;

    // php integer
    $x = 5985;
    echo "<br>";
    var_dump($x);

    // php float
    $x = 10.365;
    echo "<br>";
    var_dump($x);

    // php boolean
    $x = true;
    $y = false;
    echo "<br>";
    var_dump($x);

    // php array
    $cars = array("Volvo","BMW","Toyota");
    echo "<br>";
    var_dump($cars);

    // php null value
    $x = null;
    echo "<br>";
    var_dump($x);

    // we'll study php object data type in other program
?> 
    
</body>
</html>