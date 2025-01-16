<?php
  require_once 'animal.php';

  class Ape extends Animal {
    public function __construct($nameInput) {
      parent::__construct(2, $nameInput);
    }

    public function yell() {
      echo 'Auooooo<br>';
    }
  }
?>