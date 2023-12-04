<?php

function searchWord(array $array, string $string):bool{
    $arrayCopy = $array;
    for($i=0; $i<strlen($string);$i++){
        $letter = $string[$i];
        foreach($arrayCopy as $key => $value){
            if(in_array($letter, $value)){
                unset($arrayCopy[$key]);
            }else{
                return false;
            }
        }
    }
    return true;
    // foreach ($string as $letter){
    //     foreach($arrayCopy as $key => $value){
    //         if(in_array($letter, $value)){
    //             unset($arrayCopy[$key]);
    //         }else{
    //             return false;
    //         }
    //     }
    // }
    // return true;
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