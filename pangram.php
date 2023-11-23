<?php

function isPangram(string $string):bool
{
    $rep=array();
    $alphabet="abcdefghijklmnopqrstuvwxyz";
    for ($i=0; $i<strlen($string);$i++){
        $letter = strtolower($string[$i]);
        if (!in_array($letter,$rep) && in_array($letter,str_split($alphabet))){
            array_push($rep, $letter);
        }
    }
    return count($rep)==26;
}

$test='the quick brown fox jumps over the lazy dog';

echo isPangram($test);