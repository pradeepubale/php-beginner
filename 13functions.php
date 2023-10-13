<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in php</title>
</head>
<body>
<?php
    function writeMsg() {
    echo "Hello world!";
    }

    writeMsg(); // call the function

    // function with arguments
    function familyName($fname) {
        echo "Welcome $fname.<br>";
      }
      
      familyName("ABC");
      familyName("XYZ");
      familyName("user");

      // default parameter
      function setHeight(int $minheight = 50) {
        echo "The height is : $minheight <br>";
      }
      setHeight(350);
      setHeight(); // will use the default value of 50
      setHeight(135);

      // Passing arguments with reference
      function add_five(&$value) {
        $value += 5;
      }
      
      $num = 2;
      add_five($num);
      echo $num;

?> 
</body>
</html>