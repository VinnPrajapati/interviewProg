<?php
// abstract class is a class that cannot be instantiated directly. It serves as a blueprint for other classes to inherit from. 
// Abstract classes can contain both abstract methods (methods without a body) and concrete methods (methods with a body). 
// However, classes containing at least one abstract method must also be declared as abstract.
// Abstraction is the concept of exposing only the essential details to the user while hiding the internal implementation details. 
    In other words, abstraction focuses on what an object does, rather than how it does it.

// Define an abstract class
abstract class Shape
{
    // Abstract method to calculate area (no body)
    abstract public function calculateArea();

    // Concrete method
    public function display()
    {
        echo "This is a shape.\n";
    }
}

// Define a subclass Circle that extends the abstract class Shape
class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Implementation of the abstract method calculateArea for Circle
    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}

// Create an instance of Circle and call its methods
$circle = new Circle(5);
echo "Area of the circle: " . $circle->calculateArea() . "\n";
$circle->display(); // Concrete method inherited from the abstract class
