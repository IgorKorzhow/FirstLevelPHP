<?php
require_once "MyCalculator.php";

$mycalc = new MyCalculator(12, 6);
echo $mycalc->add(); // Displays 18
echo $mycalc->multiply(); // Displays 72
// Calculation by chain
echo $mycalc->add()->divideBy(9); // Displays 2 ( (12+6)/9=2 )
