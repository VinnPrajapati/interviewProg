<?php
function reverseString($str)
{
    // Reverse the string using strrev function
    $reverse = strrev($str);

    return $reverse;
}

// Example usage for reversing a number
$number = 12345;
echo "Reverse of $number is: " . reverseString((string) $number) . "\n";

// Example usage for reversing an alphabet
$alphabet = "Hello";
echo "Reverse of $alphabet is: " . reverseString($alphabet) . "\n";

echo "<br>";
echo "<br>";
echo "<br>";
// wihtout using inbuilt function

function reverseStringNew($str)
{
    $length = strlen($str);
    $reversed = '';

    // Iterate over each character of the string in reverse order
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }

    return $reversed;
}

// Example usage for reversing a number
$number = 12345;
echo "Reverse of $number is: " . reverseStringNew((string) $number) . "\n";

// Example usage for reversing an alphabet
$alphabet = "Hello";
echo "Reverse of $alphabet is: " . reverseStringNew($alphabet) . "\n";