<?php

function secondLargest(array $arr)
{
    sort(($arr)); // 
    echo  "The Second Largest Element is" . $arr[count($arr) - 2];
}
secondLargest(array(4, 15, 5, 6, 7, 10));