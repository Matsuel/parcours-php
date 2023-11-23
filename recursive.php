<?php

function factorial(?int $number):int
{
    if (intval($number)==1){
        return 1;
    }else{
        return intval($number * factorial($number-1));
    }
}