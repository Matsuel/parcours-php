<?php

function findIn(string $toFind, array $array): bool|string
{
    foreach($array as $key=> $value){
        if ($key==$toFind){
            return $value;
        }elseif (is_array($value)){
            $result= findIn($toFind, $value);
            if ($result){
                return $result;
            }
        }
    }
    return false;
}

$tab = [
    "name" => "forIn",
    "type" => "function",
    "arguments" => [
        "firstParam" => [
            "paramType" => "string",
            "description" => "the value key to find"
        ],
        "secondParam" => "array"
    ],
    "return" => "string or bool"
];

echo findIn('name', $tab)."\n";
echo findIn('description', $tab)."\n";
echo findIn('secondParam', $tab)."\n";
echo findIn('yeah', $tab)."\n";
echo findIn('yeah', $tab);