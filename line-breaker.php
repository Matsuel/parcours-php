<?php

function breakLines(string $string, int $length): string
{
    $rep="";
    if(strlen($string)==$length){
        return $string;
    }elseif (strlen($string)> $length){
        for($i=0; $i<=strlen($string);$i++){
            if($i%$length==0 && $i>1){
                if($string[$i]==" "){
                    $rep.="\n";
                }else{
                    $rep.= $string[$i]."\n";
                }
            }else{
                $rep.= $string[$i];
            }
        }
    }
    return $rep;
}

echo breakLines('Line with words', 15);

echo breakLines("Line with words should break", 15);

echo breakLines("Line with words should break at this spot", 15);