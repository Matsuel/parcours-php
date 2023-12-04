<?php

function myArrayReduce(callable|array $callback, array $array, $initial = null)
{
    $result = $initial;
    foreach ($array as $key => $value) {
        $result = $callback($result, $value, $key);
    }
    return $result;
}