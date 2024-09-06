<?php

// the static keyword is used to declare class properties and methods that belong to the class itself rather than to 
// instances of the class. This means that the property or method can be accessed without creating an instance of the class.

class Counter
{
    public static $count = 0; // Static property to keep track of the count

    public static function increment()
    {
        self::$count++; // Accessing static property using self keyword
    }

    public static function getCount()
    {
        return self::$count; // Accessing static property using self keyword
    }
}

// Access static property directly without creating an instance
echo "Initial count: " . Counter::$count . "\n";

// Increment the count using static method
Counter::increment();

// Get the count using static method
echo "Count after increment: " . Counter::getCount() . "\n";

// Increment the count again
Counter::increment();

// Get the count again
echo "Count after second increment: " . Counter::getCount() . "\n";
