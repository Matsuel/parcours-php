<?php

function manageMovements(string $movements):array{
    $arrayMovements = [
        "R"=> "RIGHT",
        "L"=> "LEFT",
        "F"=> "FRONT",
        "B"=> "BACKWARDS"
    ];
    $rep=array();
    for ($i=0; $i<strlen($movements);$i++){
        if (in_array($arrayMovements[$movements[$i]], $rep)){
            $arrayMovements[$movements[$i]] = $arrayMovements[$movements[$i]]." AGAIN";
            array_push($rep, $arrayMovements[$movements[$i]]);
        }else{
            array_push($rep, $arrayMovements[$movements[$i]]);
        }
    }
    return $rep;
}

print_r(manageMovements("RRLFB"));