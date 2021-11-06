<?php

class FactoryClassA implements AFactory
{

    public function getProductA(): ProductA
    {
        return new ProductAClassA();
    }

    public function getProductB(): ProductB
    {
        return new ProductBClassA();
    }
}