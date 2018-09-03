<?php

Class Product2 extends Product
{
    public $mot;
    public $hai;

    function __construct($mot, $hai)
    {
      $this->mot = $mot;
      $this->hai = $hai;
    }

    public function setA($mot, $hai)
    {
      $this->mot = $mot;
      $this->hai = $hai;
    }

    public function getA()
    {
      Product::getA();
    }
}
