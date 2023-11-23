<?php

function getFloor(int $elevator, int $requestedFloor, array $listOfButtonsCalled):int
{
    if ($requestedFloor==null){
        return $listOfButtonsCalled[0];
    }else{
        return $requestedFloor;
    }
}

function getDirection(int $elevator, int $requestedFloor, array $listOfButtonsCalled):int
{
    if ($requestedFloor==null){
        if ($elevator<$listOfButtonsCalled[0]){
            return 1;
        }elseif ($elevator==$listOfButtonsCalled[0]){
            return 0;
        }else{
            return -1;
        }
    }else{
        if ($elevator<$requestedFloor){
            return 1;
        }elseif ($elevator==$requestedFloor){
            return 0;
        }else{
            return -1;
        }
    }
}