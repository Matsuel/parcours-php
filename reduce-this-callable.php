<?php

function myArrayReduce(callable $callback, array $array, $initial = null)
{
    return $callback($array, $initial);
}