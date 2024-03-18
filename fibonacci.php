<?php
function fibonacci($n)
{
    $a = 0; // First Fibonacci number
    $b = 1; // Second Fibonacci number

    // Print the first two Fibonacci numbers
    echo $a . " " . $b . " ";
    // Generate Fibonacci sequence up to the nth term
    for ($i = 2; $i < $n; $i++) {
        $c = $a + $b; // Calculate the next Fibonacci number
        echo $c . " "; // Print the next Fibonacci number
        $a = $b; // Update the first number
        $b = $c; // Update the second number
    }
}

// Number of terms in the Fibonacci series
$terms = 10; // Change this value to generate a different number of terms

// Print Fibonacci series
echo "Fibonacci series up to $terms terms: ";
fibonacci($terms);
