<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scope in PHP</title>
</head>
<body>
<?php
$x = 10;  //global scope
function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";

// use of global keyword
$a = 15;
$b = 25;

function testFun(){
    global $a, $b;
    $a = $a + $b;
}

testFun();
echo "Using global variables a,b inside function, and printing them outside <br>";
echo $a;
?> 
</body>
</html>