<?php

function myArrayReduce(array $array,callable $callback, $initial = null)
{
    $result = $initial;
    foreach ($array as $key => $value) {
        $result = $callback($result, $value, $key);
    }
    return $result;
}