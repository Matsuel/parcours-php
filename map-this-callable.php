<?php
function myArrayMap(?callable $callback, array $array, array ...$arrays): array {
    if(!$callback){
        return $array;
    }
    $result = [];
    foreach($array as $key => $value){
        $result[$key] = $callback($value);
    }
    return $result;
    
}

// print_r(myArrayMap(null, [1, 2, 3], ['one', 'two', 'three'], ['uno', 'dos', 'tres']));

// print_r(myArrayMap(static fn ($n) => $n * $n * $n, [1, 2, 3 ,4 ,5]));

// print_r(myArrayMap(null, [1, 3, 7]));

print_r(myArrayMap(static fn ($n) => $n['value'], ['value1' => 1, 'value2' => 2, 'value3' => 3]));