<?php
  $num1 = 1;
  $num2 = 2;
  $num3 = 3;

var_dump ($num1);
var_dump (1);
var_dump ("1");

var_dump ($num1 + $num2);

//Floats
$distanceHome = 1.4;
$distanceWork = 4.2;

var_dump($distanceHome + $distanceWork);

//Operators
$a = 4;
$b = 10;

var_dump($a * $b);
var_dump($a / $b);
var_dump($a++); //Post increment
var_dump(--$b); //Pre decrement
var_dump($a += 5);

$b = 10;
$a = 2;
var_dump($b % $a);
var_dump($a ** $b);

?>
