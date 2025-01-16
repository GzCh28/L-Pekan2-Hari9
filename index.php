<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Animals</h1>
  <?php
    class Animal {
      public $legs = 4;
      public $coldBlooded = 'no';
      public $name;
      public function __construct($nameInput) {
        $this->name = $nameInput;
      }
    }

    $sheep = new Animal("shaun");

    echo $sheep->name . '<br>'; // "shaun"
    echo $sheep->legs . '<br>'; // 4
    echo $sheep->coldBlooded . '<br>'; // "no"

  ?>
</body>
</html>