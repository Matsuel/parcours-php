<?php

function sayHello():string
{
    return "Hello\n";
}

function sayHelloTo(string $name):string
{
    return "Hello " . $name . "\n";
}