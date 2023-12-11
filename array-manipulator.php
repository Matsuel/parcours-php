<?php

function reverse(array $array): array
{
    return array_reverse($array);
}

function push(array $array, string... $string): int
{
    return array_push($array, ...$string);
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