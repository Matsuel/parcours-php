<?php

function joinWords(array $words):string{
    $result="";
    for ($i=0; $i<count($words); $i++){
        if ($i==count($words)-1){
            $result.=$words[$i];
        }else{
            $result.=$words[$i].", ";
        }
    }
    return $result;
}