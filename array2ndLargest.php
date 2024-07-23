<?php

function secondLargest(array $arr)
{
    sort(($arr)); // 
    echo  "The Second Largest Element is" . $arr[count($arr) - 2];
}
secondLargest(array(4, 15, 5, 6, 7, 10));

// array sorting without using inbuilt
$arr = array(2,5,1,7,4);
for($i = 0; $i < count($arr); $i++ ) {
 for($j = 0; $j < count($arr)-1; $j++) {
 if($arr[$j+1] < $arr[$j]){
 $temp = $arr[$j+1];
 $arr[$j+1] = $arr[$j];
 $arr[$j] = $temp;
 }
 }
}
print_r($arr);
