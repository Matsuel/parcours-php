<?php

function myArrayReduce(callable|array $callback, array $array, $initial = null)
{
    return $callback($array, $initial);
}