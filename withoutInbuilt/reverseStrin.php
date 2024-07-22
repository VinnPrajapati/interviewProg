<?php

function checkLength($lengthvar)
{
    $length = 0;
    while (isset($lengthvar[$length])) {
        $length++;
    }
    return $length;
}

function reverseString($string)
{
    // $length = strlen($string);
    $length = checkLength($string);
    $reverse = "";
    for ($i = $length - 1; $i >= 0; $i--) {
        $reverse .= $string[$i];
    }
    return $reverse;
}
echo reverseString("helloo");
