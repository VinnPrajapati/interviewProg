<?php
// method overloading is achieved by having multiple methods with the same name but different parameter lists. The appropriate method to be called is determined at compile time based on the number and types of arguments provided.

class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function addThree($a, $b, $c)
    {
        return $a + $b + $c;
    }
}

$calc = new Calculator();
echo $calc->add(2, 3);        // Output: 5
echo $calc->addThree(2, 3, 4); // Output: 9