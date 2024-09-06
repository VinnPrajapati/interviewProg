<?php

// Polymorphism is typically achieved through method overriding, where a subclass provides its own implementation of a method
// that is already defined in its parent class. When a method is called on an object, PHP checks if the method is defined 
// in the object's class. If it is not found, PHP traverses up the class hierarchy until it finds the method definition or reaches 
// the top-level parent class.

// Inheritance and method overriding are used to achieve runtime polymorphism. It allows a subclass to provide a specific 
// implementation of a method that is already defined in its superclass. The appropriate method to be executed is determined at runtime 
// based on the actual type of the object. with same name and parameter


// Define a parent class
class Animal
{
    public function speak()
    {
        echo "Animal speaks.\n";
    }
}

// Define a subclass that overrides the speak method
class Dog extends Animal
{
    public function speak()
    {
        echo "Dog barks.\n";
    }
}

// Define another subclass that also overrides the speak method
class Cat extends Animal
{
    public function speak()
    {
        echo "Cat meows.\n";
    }
}

// Create instances of the subclasses
$dog = new Dog();
$cat = new Cat();

// Call the speak method on each object
$dog->speak(); // Output: Dog barks.
$cat->speak(); // Output: Cat meows.
