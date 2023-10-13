<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP echo and print</title>
</head>
<body>
<?php
    // echo function
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    // print function
    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";

    $txt1 = "Learn PHP";
    $x = 5;
    $y = 4;

    print "<h2>" . $txt1 . "</h2>";
    print "PHP: " . $txt1 . "<br>";
    print $x + $y;
?> 
</body>
</html>