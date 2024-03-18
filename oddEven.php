<?php
function checkEvenOrOdd($number)
{
    if ($number % 2 == 0) {
        echo "$number is even.";
    } else {
        echo "$number is odd.";
    }
}

// Example usage
$number = 10; // Change this value to check a different number
checkEvenOrOdd($number);