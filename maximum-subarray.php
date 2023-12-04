<?php

function findMaximumSubarray (array $array): int | float{
    $sum=0;
    for ($i=0;$i < count($array);$i++){
        if ($sum+$array[$i] > $sum){
            $sum+=$array[$i];
        }
    }
    return $sum;
}