<?php
  class Animal {
    public $legs;
    public $name;
    public $coldBlooded = 'no';
    public function __construct($legsInput, $nameInput) {
      $this->legs = $legsInput;
      $this->name = $nameInput;
    }
  }

  


?>
