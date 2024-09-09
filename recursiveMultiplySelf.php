<?php
function recursiveMultiply($n)
{
    // Base case: if n is 1, return 1 (since 1 * anything is itself)
    if ($n <= 1) {
        return 1;
    }

    // Recursive case: multiply n by the result of recursiveMultiply(n-1)
    return $n * recursiveMultiply($n - 1);
}

echo recursiveMultiply(4);
