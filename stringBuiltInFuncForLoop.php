<?php
function customStringLength($str)
{
    // Iterate through each character of the string
    // Increment the length counter for each character
    for ($length = 0; isset($str[$length]); $length++);
    return $length;
}

// Example usage:
$string = "Hello, World!";
echo "Length: " . customStringLength($string); // Output: Length: 13