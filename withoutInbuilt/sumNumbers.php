<?php

function sumOfDigits($number)
{
    $isNegative = $number < 0;

    $number = abs($number);
    $sum = 0;

    while ($number > 0) {

        $digit = $number % 10;
        $sum += $digit;
        $number = (int)($number / 10);
    }

    if ($isNegative) {
        $sum = -$sum;
    }

    return $sum;
}
echo sumOfDigits(-12345);
