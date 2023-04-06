<?php

function lastDigit(int $number): int
{
    $sum = 0;
    while($number > 0 || $sum > 9)
    {
        if($number == 0)
        {
            $number = $sum;
            $sum = 0;
        }
        $sum += (int)$number % 10;
        $number = (int)$number / 10;
    }
    return $sum;
}

echo lastDigit(91);