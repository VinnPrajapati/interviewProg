<?php
function customCount($arr)
{
    $count = 0;
    // Iterate through each element of the array
    // Increment the count for each element
    for ($i = 0; isset($arr[$i]); $i++) {
        $count++;
    }
    return $count;
}

// Example usage:
$array = [1, 2, 3, 4, 5];
echo "Count: " . customCount($array); // Output: Count: 5