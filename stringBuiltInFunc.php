<?php
function customStringLength($str)
{
    $length = 0;
    // Iterate through each character of the string
    // Increment the length counter for each character
    while (isset($str[$length])) {
        $length++;
    }
    return $length;
}

// Example usage:
$string = "Hello, World!";
echo "Length: " . customStringLength($string); // Output: Length: 13