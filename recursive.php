<?php

function factorial(?int $number):?int
{
    if (intval($number)==1){
        return 1;
    }else{
        return (int) $number * factorial($number-1);
    }
}