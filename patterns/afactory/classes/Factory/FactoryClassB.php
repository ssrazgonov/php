<?php

class FactoryClassB implements AFactory
{

    public function getProductA(): ProductA
    {
        return new ProductAClassB();
    }

    public function getProductB(): ProductB
    {
        return new ProductBClassB();
    }
}