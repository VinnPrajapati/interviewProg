<?php
function isLeapYear($year)
{
    // A year is a leap year if it is divisible by 4,
    // except for years that are divisible by 100 but not divisible by 400.
    return ($year % 4 == 0) && (($year % 100 != 0) || ($year % 400 == 0));
}

// Example usage
$year = 2024; // Change this value to check a different year
if (isLeapYear($year)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}