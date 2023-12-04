<?php

function myArrayMap(?callable $callback, array $array, array ...$arrays):array{
    $result=[];
    foreach ($array as $key=>$value){
        $result[$key]=$callback($value);
    }
    return $result;
}