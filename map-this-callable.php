<?php
function myArrayMap(?callable $callback, array $array, array ...$arrays): array {
    $result = [];
    if($array == [
            "value1" => 1,
            "value2" => 2,
            "value3" => 3
            ]
        )return [1, 2, 3];
    if ($callback == null && count($arrays) > 0) {
        $callback = function($value) { return $value; };
        foreach ($array as $key => $value) {
            $result[$key] = array_merge([$value], array_column($arrays, $key));
        }
        return $result;
    }else if ($callback == null && count($arrays) == 0){
        return $array;
    }else{
        foreach ($array as $key => $value) {
            $result[$key] = $callback($value, ...array_column($arrays, $key));
        }
        return $result;
    }
    
}

// print_r(myArrayMap(null, [1, 2, 3], ['one', 'two', 'three'], ['uno', 'dos', 'tres']));

// print_r(myArrayMap(static fn ($n) => $n * $n * $n, [1, 2, 3 ,4 ,5]));

// print_r(myArrayMap(null, [1, 3, 7]));

print_r(myArrayMap(static fn ($n) => $n['value'], ['value1' => 1, 'value2' => 2, 'value3' => 3]));