<?php

function findMaximumSubarray (array $array): int | float{
    $sum=0;
    for ($i=0;$i < count($array);$i++){
        if ($sum+$array[$i] > $sum || $sum+$array[$i] == 0){
            $sum+=$array[$i];
        }
    }
    return $sum;
}

echo findMaximumSubarray([1, -1, 4, 6, 3]);