<?php
function numberLength($num)
{
    $length = 0;
    $num = abs($num);
    while ($num >= 1) {
        $num = $num / 10;
        $length++;
    }
    return $length;
}
echo "no count is => " . numberLength(3324424242442);

function numberLengthUsingString($num)
{
    // Convert the number to a string
    $numStr = (string) $num;

    // Count the characters in the string
    $length = 0;
    while (isset($numStr[$length])) {
        $length++; // Increment until end of string
    }

    // Return the length
    return $length;
}

// Example usage:
echo numberLengthUsingString(12345);  // Output: 5
echo numberLengthUsingString(-9876);  // Output: 4
echo numberLengthUsingString(0);      // Output: 1 (special case for zero)