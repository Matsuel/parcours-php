<?php

function myArrayFilter(array $array, ?callable $callback=null):array{
    $result = [];
    if($callback == null){
        foreach($array as $key => $value){
            if($value){
                $result[$key] = $value;
            }
        }
        return $result;
    }else{
        foreach($array as $key => $value){
            if($callback($value)){
                $result[$key] = $value;
            }
        }
        return $result;
    }
}