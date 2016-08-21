<?php
  //store each exercie in string
  //create var containing day of week
  // use an if statement to test for day
  //display exercise

  $ex1 = 'Squats';
  $ex2 = 'Pushups';
  $ex3 = 'Lunges';
  $ex4 = 'Pull Ups';
  $ex5 = 'Curls';
  $ex6 = 'Rows';
  $ex7 = 'Situps';

  $day = date('N'); //Numeric value returned for date 1=Mon 7=Sunday

  if($day == 1){
    echo $ex1;
  }
  elseif($day == 2){
    echo $ex2;
  }
  elseif($day == 3){
    echo $ex3;
  }
  elseif($day == 4){
    echo $ex4;
  }
  elseif($day == 5){
    echo $ex5;
  }
  elseif($day == 6){
    echo $ex6;
  }
  elseif($day == 7){
    echo $ex7;
  }
  ?>
