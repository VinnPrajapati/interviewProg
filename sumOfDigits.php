<?php
function sumOfDigits($number)
{
    $sum = 0;
    // Convert the number to a string
    $numberStr = (string) $number;
    // Iterate over each digit in the string
    for ($i = 0; $i < strlen($numberStr); $i++) {
        // Add the current digit to the sum
        $sum += intval($numberStr[$i]);
    }
    return $sum;
}

// Example usage
$number = 12345; // Change this value to sum digits of a different number
echo "Sum of digits in $number: is-"  . sumOfDigits($number);