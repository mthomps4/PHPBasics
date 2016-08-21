<?php
//Conversions
$lb_to_kg = 0.453592;
$mile_to_km = 1.60934;

$pounds = 250;
$kilograms = $pounds * $lb_to_kg;

echo "Weight:", $pounds, "lbs = ", $kilograms, " kg";

$miles = 42;
$km = $miles * $mile_to_km;

echo "  ", $miles, "miles = ", $km, "km";
?>
