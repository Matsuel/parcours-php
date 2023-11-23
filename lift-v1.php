<?php

function getFloor(int $elevator, ?int $requestedFloor, array $listOfButtonsCalled): ?int
{
    if ($requestedFloor==null){
        if (count($listOfButtonsCalled)>1 && $listOfButtonsCalled[0]<0){
            return $listOfButtonsCalled[1];
        }else{
            return $listOfButtonsCalled[0];
        }
    }else{
        return $requestedFloor;
    }
}

function getDirection(int $elevator, ?int $requestedFloor, array $listOfButtonsCalled):?int
{
    if (getFloor($elevator, $requestedFloor, $listOfButtonsCalled) > $elevator){
        return 1;
    }elseif (getFloor($elevator, $requestedFloor, $listOfButtonsCalled) < $elevator){
        return -1;
    }else{
        return 0;
    }
}

echo getFloor(0, null, [-3, 2]);