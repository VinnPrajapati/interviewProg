<?php
function isPalindrome($str)
{
    // Remove spaces and convert to lowercase
    $str = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $str));

    // Reverse the string
    $reverseStr = strrev($str);

    // Check if the original and reversed strings are equal
    if ($str === $reverseStr) {
        return true; // Palindrome
    } else {
        return false; // Not a palindrome
    }
}
// echo "Palindrom is" . ("121");
// Test cases
// $strings = array("A man, a plan, a canal, Panama", "racecar", "hello", "12321");
$str = "aba";
// foreach ($strings as $str) {
if (isPalindrome($str)) {
    echo "\"$str\" is a palindrome.\n";
} else {
    echo "\"$str\" is not a palindrome.\n";
}
// }