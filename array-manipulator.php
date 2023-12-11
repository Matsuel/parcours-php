<?php

function reverse(array $array): array
{
    return array_reverse($array);
}

function push(array $array, string... $string): int
{
    foreach ($string as $value) {
        array_push($array, $value);
    }
    return count($array);
}

function sum(array $array): int
{
    return array_sum($array);
}

function arrayContains(array $array, int|string|float $value): mixed
{
    return in_array($value, $array);
}

function merge(array ...$arrays): array
{
    return array_merge(...$arrays);
}

$tab =[];
echo push($tab, "first", "second", "five");