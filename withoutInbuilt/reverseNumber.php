<?php

function reverseNumber($number)
{
    $isNegative = $number < 0;

    $number = abs($number);
    $reversed = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $reversed = $reversed * 10 + $digit;
        $number = (int)($number / 10);
    }
    if ($isNegative) {
        $reversed = (-$reversed);
    }
    return $reversed;
}

echo reverseNumber(-563);
