<?php

class Magic 
{
    public string $card= "As";
    public function __construct()
    {
        echo "I'm a constructor";
    }

    public function __destruct()
    {
        echo "I'm a destructor";
    }

    public function __get($name)
    {
        echo "You are trying to get $name";
    }

    public function __set($name, $value)
    {
        echo "You are trying to set $name to $value";
    }

    public function __isset($name)
    {
        echo "You are trying to check if $name is set";
    }

    public function __toString()
    {
        return "I'm a string";
    }

}