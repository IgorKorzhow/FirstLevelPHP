<?php

function fibonachi(int $n): string {
    $firshNumber = 0;
    $secondNumber = 1;
    while (strlen($secondNumber) < $n) {
        $var = sumStr($firshNumber, $secondNumber);
        $firshNumber = $secondNumber;
        $secondNumber = $var;
    }
    return $secondNumber;
}

function sumStr(string $str1, string $str2): string {
    $maxLength = strlen($str2);
    $str1 = str_pad($str1, $maxLength, '0', STR_PAD_LEFT);
    $res = '';
    $overflow = 0;
    for($i = $maxLength - 1; $i >= 0; $i--) {
        $var1 = (int)$str1[$i];
        $var2 = (int)$str2[$i];
        $sum = $var1 + $var2;
        $sum = $sum + $overflow;

        if ($sum > 9) {
            $overflow = 1;
            $sum %= 10;
        }
        else
            $overflow = 0;
        $res = $sum.$res;
    }
    if ($overflow == 1)
        $res = $overflow.$res;
    return $res;
}