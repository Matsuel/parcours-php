<?php

function reverse(string $string): string
{
    $rep="";
    for ($i=strlen($string)-1; $i>=0; $i--){
        $rep.=$string[$i];
    }
    return $rep;
}

function isPalindrome(string $string): bool
{
    return $string==reverse($string);
}