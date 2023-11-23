<?php

function calc(string $calculator):int
{
    if (preg_match('/^[0-9 \+\-\(\)]*$/', $calculator) === 1){
        return (int) eval("return $calculator;");
    }
}

echo calc('1 + 1');