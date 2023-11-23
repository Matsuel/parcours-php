<?php


$today = function() use (&$date){
    return "It is " . date("F")." ". date("d").", ". date("Y");
};

$today;

$year= date("L");

$isLeapYear = function($year){
    if ($year%4==0){
        return true;
    }else{
        return false;
    }
};

$a=$isLeapYear(2022);

echo $a;
