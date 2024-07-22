<?php
echo "Program to sum of array elements ";
$arr = [10, 20, 5, 6,];
$sum = 0;

for ($i = 0; $i < sizeof($arr); $i++) {
    $sum += $arr[$i];
}
echo  "Sum of array elements is: " . $sum;

echo "\n";