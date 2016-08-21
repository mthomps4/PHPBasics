<?php
  $a = 10;
  $b = "10";

  var_dump($a == $b);
  var_dump($a === $b);

  $studentOneName = 'Dave';
  $studentOneGPA = 3.8;

  $studentTwoName = 'Treasure';
  $studentTwoGPA = 4.0;

  //Place your code below this comment
  if($studentOneGPA == 4.0 ){
  echo $studentOneName. " made the Honor Role with a $studentOneGPA". "\n";
  } else {
    echo $studentOneName. " has a GPA of ". $studentOneGPA. "\n";
  }

  if ($studentTwoGPA == 4.0){
   echo $studentTwoName. " made the Honor Role". "\n";
  } else {
    echo $studentTwoName. " has a GPA of ". $studentTwoGPA. "\n";
  }


  /*
  $a == $b	Equal	TRUE if $a is equal to $b after type juggling.
  $a === $b	Identical	TRUE if $a is equal to $b, and they are of the same type.
  $a != $b	Not equal	TRUE if $a is not equal to $b after type juggling.
  $a <> $b	Not equal	TRUE if $a is not equal to $b after type juggling.
  $a !== $b	Not identical	TRUE if $a is not equal to $b, or they are not of the same type.
  $a < $b	Less than	TRUE if $a is strictly less than $b.
  $a > $b	Greater than	TRUE if $a is strictly greater than $b.
  $a <= $b	Less than or equal to	TRUE if $a is less than or equal to $b.
  $a >= $b	Greater than or equal to	TRUE if $a is greater than or equal to $b.
  $a <=> $b	Spaceship	An integer less than, equal to, or greater than zero when $a is respectively less than, equal to, or greater than $b. Available as of PHP 7.
  */
?>
