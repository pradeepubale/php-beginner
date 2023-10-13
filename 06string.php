<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String in php</title>
</head>
<body>
<?php
    // php string functions
    echo strlen("Hello world!");
    echo "<br>";
    echo str_word_count("Hello world!");
    echo "<br>";
    echo strrev("Hello world!");
    echo "<br>";
    echo strpos("Hello world!", "world");
    echo "<br>";
    echo str_replace("world", "Mob", "Hello world!"); 

?> 
</body>
</html>