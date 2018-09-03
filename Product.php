<?php

Class Product {

  public $a;
  public $b;

  function __construct($a, $b)
  {
    $this->a = $a;
    $this->b = $b;
  }

  public function setA($a, $b)
  {
    $this->a = $a;
    $this->b = $b;
  }

  public function getA()
  {
    return ($this->a + $this->b);
  }

  public function getB()
  {
    return ($this->a - $this->b);
  }
}
