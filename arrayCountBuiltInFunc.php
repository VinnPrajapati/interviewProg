<?php

function customCount($arr)
{
    $count = 0;
    foreach ($arr as $element) {
        $count++;
    }
    return $count;
}

// Example usage:
$array = [1, 2, 3, 4, 5];
echo "Count: " . customCount($array); // Output: Count: 5