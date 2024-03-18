<?php
// interface is a contract that defines a set of methods that a class must implement. It declares the method signatures without providing any implementation. Classes that implement an interface must define all the methods declared by the interface. This allows for a level of abstraction and ensures that classes adhere to a certain structure or behavior.

// Define an interface named Printable
interface Printable
{
    public function printInfo();
}

// Define a class named Document that implements the Printable interface
class Document implements Printable
{
    public function printInfo()
    {
        echo "Printing document information...\n";
    }
}

// Create an object of the Document class
$document = new Document();

// Call the printInfo method of the Document class
$document->printInfo();