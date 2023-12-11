<?php

function reverse(array $array): array
{
    return array_reverse($array);
}

function push(array &$array, string... $string): int
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
    if (in_array($value, $array)) {
        return $value;
    }else{
        return "Nothing";
    }
}

function merge(array ...$arrays): array
{
    return array_merge(...$arrays);
}

$tab =[];
echo push($tab, "first", "second", "five");

print_r($tab);

echo arrayContains(["Ok", 5, 5.4], 5.4);