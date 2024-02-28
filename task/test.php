<?php
$a = 5;
$b = 10;

echo "Before swapping: a = $a, b = $b <br>";

$a = $a + $b; // $a now holds the sum of both variables
$b = $a - $b; // $b now holds the original value of $a
$a = $a - $b; // $a now holds the original value of $b

echo "After swapping: a = $a, b = $b";
?>
