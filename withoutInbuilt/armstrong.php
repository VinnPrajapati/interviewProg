<?php
function isArmstrong($num)
{
    $originalNum = $num;
    $sum = 0;

    // Calculate the sum of cubes of each digit
    while ($num > 0) {
        $digit = $num % 10;
        $sum += $digit * $digit * $digit;
        $num = (int)($num / 10);
    }

    // Check if the sum is equal to the original number
    return $sum === $originalNum;
}

// Example usage:
$number = 153;
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}

echo "<br>";

function isArmstrong1($num)
{
    $originalNum = $num;
    $sum = 0;

    while ($num > 0) {
        $digit = $num % 10;
        $sum = $sum + ($digit * $digit * $digit);
        $num = (int)($num / 10);
    }
    return $sum === $originalNum;
}
if (isArmstrong1(153)) :
    echo "armstrong";
else :
    echo "not armstrong";
endif;