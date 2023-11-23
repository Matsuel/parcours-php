<?php

$date= "It is ";

$today = function() use (&$date){
    echo $date . date("F")." ". date("d").", ". date("Y")."\n";
};

$today;

$year= date("L");

$leapYear = function() use (&$year){
    if ($year%4==0){
        echo "This is a leap year.\n";
    }else{
        echo "This is not a leap year.\n";
    }
};

$leapYear;