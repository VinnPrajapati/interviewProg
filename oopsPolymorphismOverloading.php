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

// To simulate method overloading in PHP, you can use the __call magic method. Here’s an example of how you can achieve a form of method overloading:
class Calculator
{
    public function __call($name, $arguments)
    {
        if ($name == 'add') {
            if (count($arguments) == 2) {
                return $this->addTwo($arguments[0], $arguments[1]);
            } elseif (count($arguments) == 3) {
                return $this->addThree($arguments[0], $arguments[1], $arguments[2]);
            }
        }
        // You can add more conditions for other methods
    }

    private function addTwo($a, $b)
    {
        return $a + $b;
    }

    private function addThree($a, $b, $c)
    {
        return $a + $b + $c;
    }
}

$calc = new Calculator();
echo $calc->add(2, 3);        // Output: 5
echo $calc->add(2, 3, 4);     // Output: 9
