<?php


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  </head>

  <body>
    <?php
    require_once('Models/Product.php');
    require_once('Models/Product2.php');
    $a = 100;
    $b = 200;
    $product = new Product($a, $b);
    $product2 = new Product2($a, $b);
    echo 'bieu thuc 1: ' . $product->getA();
    echo '<br>';
    echo 'bieu thuc 2: ' . $product->getB();
    echo '<br>';
    echo 'bieu thuc 1 cua product 2: ' . $product->getA();
     ?>
  </body>
</html>
