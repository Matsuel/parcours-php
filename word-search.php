<?php

function searchWord(array $array, string $string):bool{
    $lettersUsed = [];
    for($i=0; $i<strlen($string); $i++){
        $letter = $string[$i];
        foreach($array as $key => $value){
            foreach($value as $k => $v){
                if($v == $letter){
                    if(in_array([$key, $k], $lettersUsed)){
                        return false;
                    }else{
                        $lettersUsed[] = [$key, $k];
                    }
                }
            }
        }
    }
    return true;
}

$board = [
    ['a', 'b', 'c', 'd'],
    ['d', 'k', 'l', 'm'],
    ['m', 'f', 'b', 's']
];

// Word can be constructed as letters from adjacent cells sequentially
// where the 'adjacent' cells are the neighboring ones horizontally or vertically
echo searchWord($board, 'abcd'); // true
echo searchWord($board, 'abcl'); // true
echo searchWord($board, 'admfbl'); // true

// It is not allowed to use the same letter twice
echo searchWord($board, 'abcc'); // false
echo searchWord($board, 'abcdc'); // false
echo searchWord($board, 'dklml'); // false