<?php

$month=date('n');
$rep="We are in the month of ";

switch($month){
    case 1:
        echo $rep . "January";
        break;
    case 2:
        echo $rep . "February";
        break;
    case 3:
        echo $rep . "March";
        break;
    case 4:
        echo $rep . "April";
        break;
    case 5:
        echo $rep . "May";
        break;
    case 6:
        echo $rep . "June";
        break;
    case 7:
        echo $rep . "July";
        break;
    case 8:
        echo $rep . "August";
        break;
    case 9:
        echo $rep . "September";
        break;
    case 10:
        echo $rep . "October";
        break;
    case 11:
        echo $rep . "November";
        break;
    case 12:
        echo $rep . "December";
        break;
    
}