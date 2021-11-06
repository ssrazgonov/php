<?php

class Product
{
    public $fieldA;
    public $fieldB;

    public function getInfo() {
        echo "Product has fieldA = {$this->fieldA} <br/>";
        echo "Product has fieldB = {$this->fieldB}";
    }
}