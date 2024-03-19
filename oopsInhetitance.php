<?php
// Inheritance is a fundamental concept in object-oriented programming (OOP) that allows a new class (subclass or derived class) to inherit properties and methods from an existing class (superclass or base class).

// Define the superclass
class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function speak()
    {
        echo "Animal speaks.\n";
    }
}

// Define a subclass that inherits from Animal
class Dog extends Animal
{
    public function speak()
    {
        echo "Dog barks.\n";
    }
}

// Create instances of the classes
$animal = new Animal("Generic Animal");
$dog = new Dog("Buddy");

// Call methods on instances
echo $animal->getName() . "\n"; // Output: Generic Animal
$animal->speak(); // Output: Animal speaks.

echo $dog->getName() . "\n"; // Output: Buddy
$dog->speak(); // Output: Dog barks.