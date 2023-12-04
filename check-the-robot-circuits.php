<?php

function checkCircuits(int $nb):array{
    $rep=[];
    $arrayobj=[
        2=>'Left arm',
        3=>'Right arm',
        5=>'Motherboard',
        7=>'Processor',
        11=>'Zip Defluxer',
        13=>'Motor'
    ];
    foreach ($arrayobj as $key=>$value){
        if ($nb%$key==0){
            array_push($rep, $value);
        }
    }
    return $rep;
}

print_r(checkCircuits(825));