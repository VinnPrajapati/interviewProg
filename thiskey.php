<?php

// the $this keyword refers to the current object instance within a class context. 
// It is used to access properties and methods of the object itself. 
// The $this keyword can only be used inside class methods and is not available outside of the class scope.

class MyClass
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name; // Accessing property using $this
    }

    public function getName()
    {
        return $this->name; // Accessing property using $this
    }

    public function setName($newName)
    {
        $this->name = $newName; // Modifying property using $this
    }
}

// Create an instance of MyClass
$obj = new MyClass("John");

// Access property using $this
echo "Name: " . $obj->getName() . "\n";

// Modify property using $this
$obj->setName("Alice");

// Access property again
echo "Updated Name: " . $obj->getName() . "\n";
