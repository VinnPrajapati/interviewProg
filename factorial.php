<?php
function factorial($n)
{
    // Base case: factorial of 0 is 1
    if ($n == 0) {
        return 1;
    }

    // Initialize result
    $result = 1;

    // Calculate factorial iteratively
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }

    return $result;
}

// Example usage
$number = 5; // Change this value to calculate factorial for a different number
echo "Factorial of $number is: " . factorial($number);