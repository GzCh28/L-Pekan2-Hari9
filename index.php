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
    require_once 'animal.php';
    require_once 'frog.php';
    require_once 'ape.php';
    

    $sheep = new Animal(4,"shaun");

    echo "Name: $sheep->name <br>";
    echo "Legs: $sheep->legs <br>";
    echo "Cold Blooded: $sheep->coldBlooded <br><br>";


    $sungokong = new Ape("kera sakti");
    echo "Name: $sungokong->name <br>";
    echo "Legs: $sungokong->legs <br>";
    echo "Cold Blooded: $sungokong->coldBlooded <br>";
    echo "Yell: ";
    $sungokong->yell(); // "Auooo"
    echo '<br>';
    

    $kodok = new Frog("buduk");
    echo "Name: $kodok->name <br>";
    echo "Legs: $kodok->legs <br>";
    echo "Cold Blooded: $kodok->coldBlooded <br>";
    echo "Jump: ";
    $kodok->jump(); // "hop hop"
    echo '<br>';
    

  ?>
</body>
</html>