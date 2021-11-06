<?php

abstract class BaseType
{
    protected $price;
    protected $name;

    public function __construct($price, $name)
    {
        $this->price = $price;
        $this->name = $name;
    }
}