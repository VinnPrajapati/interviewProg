<?php
// function stringLength($string)
// {
//     $length = 0;
//     for ($i = 0; isset($string[$i]); $i++) {
//         $length++;
//     }
//     return $length;
// }
// echo stringLength("this");



// function custom_string_length($string)
// {
//     $length = 0;
//     // Iterate through each character of the string using a for loop
//     for ($i = 0; $string[$i] != ""; $i++) {
//         $length++;
//     }
//     return $length;
// }

// // Example usage:
// echo custom_string_length("this"); // Outputs: 4
// echo custom_string_length("12345"); // Outputs: 5
// echo custom_string_length("hello123"); // Outputs: 7

function custom_string_length($string)
{
    $length = 0;
    // Iterate through each character of the string until the end
    while (isset($string[$length])) {
        $length++;
    }
    return $length;
}

// Example usage:
echo custom_string_length("this"); // Outputs: 4
echo custom_string_length("12345"); // Outputs: 5
echo custom_string_length("hello123"); // Outputs: 7