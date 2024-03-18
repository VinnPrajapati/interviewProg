<?php
function printTable($number, $limit)
{
    echo "Table of $number:\n";
    for ($i = 1; $i <= $limit; $i++) {
        echo "$number x $i = " . ($number * $i) . "\n";
    }
}

// Example usage: Print the table of 5 up to 10
$number = 5;
$limit = 10;
printTable($number, $limit);