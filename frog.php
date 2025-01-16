<?php
  require_once 'animal.php';

  class Frog extends Animal {
    public function __construct($nameInput) {
      parent::__construct(4, $nameInput);
    }

    public function jump() {
      echo 'Hop-Hop<br>';
    }
  }
?>