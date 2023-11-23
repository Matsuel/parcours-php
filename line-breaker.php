<?php

function breakLines(string $string, int $length): string
{
    if(strlen($string)==$length){
        return $string;
    }elseif (strlen($string)> $length){
        $wordSize=0;
        for($i=0;$i<strlen($string);$i++){
            if($string[$i]=="\n"){
                $wordSize=1;
            }elseif ($wordSize==$length){
                $nbCharSpace=0;
                while($string[$i-$nbCharSpace]!=" "){
                    $nbCharSpace++;
                }
                $string[$i-$nbCharSpace]="\n";
                $wordSize=0;
            }elseif($wordSize!=$length){
                $wordSize++;
            }
        }
        return $string;
    }
}

// function breakLines(string $string, int $length):string
// {
//     // $rep="";
//     // if(strlen($string)==$length){
//     //     return $string;
//     // }elseif (strlen($string)> $length){
//     //     for($i=0; $i<=strlen($string);$i++){
//     //         if($i%$length==0 && $i>1){
//     //             if($string[$i]==" "){
//     //                 $rep.="\n";
//     //             }elseif ($string[$i+1]==" "){
//     //                 $rep.= $string[$i]."\n";
//     //                 $i++;
//     //             }
//     //             else{
//     //                 $rep.= $string[$i]."\n";
//     //             }
//     //         }else{
//     //             $rep.= $string[$i];
//     //         }
//     //     }
//     // }
//     // return $rep;
// }

echo breakLines('Line with words', 15);

echo breakLines("Line with words should break", 15);

echo breakLines("Line with words should break at this spot", 15);

echo breakLines('Title is long
Line with words break', 12);