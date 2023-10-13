<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants in PHP</title>
</head>
<body>
<?php
    define("GREETING", "Welcome to PHP!");
    echo GREETING, "<br>";

    // Constants are Global
    function myTest() {
        echo GREETING;
      }
       
    myTest();
?> 
</body>
</html>