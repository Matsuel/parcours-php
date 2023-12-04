<?php
function myArrayMap(?callable $callback, array $array, array ...$arrays): array {
    $result = [];
    if ($callback == null) {
        $callback = function($value) { return $value; };
        foreach ($array as $key => $value) {
            $result[$key] = array_merge([$value], array_column($arrays, $key));
        }
        return $result;
    }else{
        foreach ($array as $key => $value) {
            $result[$key] = $callback($value, ...array_column($arrays, $key));
        }
        return $result;
    }
    
}

print_r(myArrayMap(null, [1, 2, 3], ['one', 'two', 'three'], ['uno', 'dos', 'tres']));

print_r(myArrayMap(static fn ($n) => $n * $n * $n, [1, 2, 3 ,4 ,5]));