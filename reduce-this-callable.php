<?php

function myArrayReduce(callable $callback, array $array, $initial = null)
{
    $accumulator = $initial;
    foreach ($array as $value) {
        $accumulator = $callback($accumulator, $value);
    }
    return $accumulator;
}