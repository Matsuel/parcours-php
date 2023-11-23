<?php

function capsMe(string $string):string 
{
    return strtoupper($string);
}

function lowerMe(string $string):string 
{
    return strtolower($string);
}

function upperCaseFirst(string $string):string
{
    return ucwords($string);
}

function lowerCaseFirst(string $string):string
{
    $rep="";
    foreach (explode(" ", $string) as $word){
        $rep.= lcfirst($word) . " ";
    }
    return $rep;
}

function removeBlankSpace(string $string ):string
{
    return trim($string);
}

$test = "  Hello W o r l d  ";

echo removeBlankSpace($test) . "\n";