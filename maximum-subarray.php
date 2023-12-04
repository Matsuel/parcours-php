<?php

function findMaximumSubarray (array $array): int | float{
    if (count($array)==0) return 0;
    $sum=$array[0];
    $currentSum = $array[0];
    for ($i=1;$i < count($array);$i++){
        $currentSum = max($array[$i], $currentSum + $array[$i]);
        $sum = max($sum, $currentSum);
    }
    return $sum;
}

echo findMaximumSubarray([1, -1, 4, 6, 3]) . "\n";

echo findMaximumSubarray([-2, 1, -3, 4, -1, 2, 1, -5, 4]);