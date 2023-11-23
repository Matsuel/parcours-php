<?php

function isPangram(string $string): bool
{
    $letters=array();
    foreach ($string as $letter){
        if (!in_array($letter, $letters)){
            array_push($letters, $letter);
        }
    }
    return count($letters)==26;
}