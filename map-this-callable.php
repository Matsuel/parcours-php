<?php

function myArrayMap(?callable $callback, array $array, array ...$arrays):array{
    $result=[];
    if ($callback==null){
        $callback=function($value){return $value;};
    }
    foreach ($array as $key=>$value){
        $result[$key]=$callback($value);
    }
    return $result;
}