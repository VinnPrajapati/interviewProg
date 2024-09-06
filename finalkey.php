<?php
// the final keyword is used to prevent inheritance or method overriding. When a class is marked as final, 
// it cannot be extended by any other class, and when a method is marked as final, it cannot be overridden by subclasses.

class ParentClass
{
    final public function myMethod()
    {
        echo "This method cannot be overridden.\n";
    }
}

class ChildClass extends ParentClass
{
    // Attempting to override the final method will result in an error
    public function myMethod()
    {
        echo "This method has been overridden.\n";
    }
}

// Attempting to extend the final class will result in an error
final class FinalClass
{
    public function myMethod()
    {
        echo "This method cannot be overridden.\n";
    }
}

// Attempting to extend the final class will result in an error
class AnotherClass extends FinalClass
{
    public function myMethod()
    {
        echo "This method has been overridden.\n";
    }
}
