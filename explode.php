<?php

function explodeWords(string $string, string $sep=" ",int $lengthTab=1): array
{
    $result=array();
    $word="";
    for ($i=0; $i<strlen($string); $i++){
        if (count($result)==$lengthTab-1 && $lengthTab>1){
            array_push($result, substr($string, $i));
            break;
        }elseif ($string[$i]==$sep){
            array_push($result, $word);
            $word="";
        }else{
            $word.=$string[$i];
        }
    }
    if ($word!="")
        array_push($result, $word);
    if ($lengthTab<0){
        return array_slice($result, 0, $lengthTab);
    }else{
        return $result;
    }
}

print_r(explodeWords("Hello world"));
print_r(explodeWords('My-name/is-John/and-i-love-apple', '/', 2));
print_r(explodeWords('My-name/is-John/and-i-love-apple', '/', -1));