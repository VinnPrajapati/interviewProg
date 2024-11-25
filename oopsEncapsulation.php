<?php
//Encapsulation bundles data and methods within a class, providing a protective barrier around the internal workings of an object. 
// Encapsulation promotes data hiding, preventing direct access to class properties from outside the class.

// Define a class named Car
class Car
{
    // Private properties (encapsulation)
    private $model;
    private $color;
    private $speed;

    // Constructor to initialize properties
    public function __construct($model, $color, $speed)
    {
        $this->model = $model;
        $this->color = $color;
        $this->speed = $speed;
    }

    // Getter methods (accessors)
    public function getModel()
    {
        return $this->model;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    // Setter methods (mutators)
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }
}

// Create an object of the Car class
$car = new Car("Toyota", "Red", 100);

// Accessing properties directly (not recommended)
// echo "Car model: " . $car->model; // Error: Cannot access private property

// Accessing properties using getter methods (encapsulation)
echo "Car model: " . $car->getModel() . "\n";
echo "Car color: " . $car->getColor() . "\n";
echo "Car speed: " . $car->getSpeed() . "\n";

// Modifying speed using setter method
$car->setSpeed(120);
echo "Updated car speed: " . $car->getSpeed() . "\n";
