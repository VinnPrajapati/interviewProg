<?php
// armstrong no is qube of its digits then sum 
function isArmstrong($number)
{
    $sum = 0;
    $temp = $number;
    $numberOfDigits = strlen((string)$number);

    // Calculate the sum of each digit raised to the power of the number of digits
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numberOfDigits);
        $temp = intval($temp / 10);
    }

    // Check if the sum is equal to the original number
    return $sum === $number;
}

// Example usage
$number = 153; // Change this value to check a different number
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}