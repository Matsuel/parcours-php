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
        array_push($rep, $arrayMovements[$movements[$i]]);
    }
    return $rep;
}

print_r(manageMovements("RLFB"));