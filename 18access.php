<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Modifiers in PHP</title>
</head>
<body>
<?php
class Fruit {
    public $name;
    protected $color;
    private $weight = 10;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
    echo $this->name, "<br>";
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  function set_weight() {
    echo $this->weight;
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
$mango->set_weight('300');
$mango->set_color('Yellow'); // ERROR 
?> 
</body>
</html>