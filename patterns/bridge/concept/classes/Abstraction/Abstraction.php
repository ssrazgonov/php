<?php

class Abstraction
{
    protected $implementation;

    public function __construct(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    public function printImplementation() {
        echo "do something on " . $this->implementation->someOperation();
    }
}