<?php
// Function to calculate the area of a triangle
function areaOfTriangle($base, $height)
{
    return 0.5 * $base * $height;
}

// Function to calculate the area of a rectangle
function areaOfRectangle($length, $width)
{
    return $length * $width;
}

// Function to calculate the area of a circle
function areaOfCircle($radius)
{
    return M_PI * $radius * $radius;
}

// Function to calculate the area of a square
function areaOfSquare($side)
{
    return $side * $side;
}

// Example usage
$base = 5;
$height = 8;
$length = 6;
$width = 4;
$radius = 3;
$side = 5;

echo "Area of Triangle: " . areaOfTriangle($base, $height) . "\n";
echo "Area of Rectangle: " . areaOfRectangle($length, $width) . "\n";
echo "Area of Circle: " . areaOfCircle($radius) . "\n";
echo "Area of Square: " . areaOfSquare($side) . "\n";