<?php
$name = "Matt";
$string1 = "Hello $name"; //use double "" for variables within string
echo $string1;

$string2 = "
\n  new line
\r	carriage return
\t	horizontal tab
\e	escape
\\	backslash
\$	dollar sign
\"	double-quote \n";

echo $string2;


$firstName = 'Rasmus';
$lastName = 'Lerdorf';

$fullname = $firstName . ' ' . $lastName;

echo $fullname . " was the original creator of PHP" . "\n";
?>
