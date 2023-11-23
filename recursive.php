<?php

function factorial(?int $number):float
{
    if ($number<=2){
        return $number;
    }else{
        return (int) $number * factorial($number-1);
    }
}

echo  factorial(45);