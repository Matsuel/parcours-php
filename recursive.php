<?php

function factorial(int $number): int|float
{
    if ($number==1){
        return (int)1;
    }elseif ($number<=2){
        return $number;
    }else{
        return $number * factorial($number-1);
    }
}

echo factorial(1)."\n";
echo factorial(5)."\n";
echo  factorial(45);