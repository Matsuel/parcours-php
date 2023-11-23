<?php


$today = function() use (&$date){
    echo "It is " . date("F")." ". date("d").", ". date("Y")."\n";
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

$isLeapYear(2022);