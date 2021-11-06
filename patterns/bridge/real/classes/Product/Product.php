<?php

class Product
{
    protected $productType;

    public function __construct(ProductType $productType)
    {
        $this->productType = $productType;
    }

    public function changeType(ProductType $productType) {
        $this->productType = $productType;
    }

    public function getProductInfo() {
        return "Название : {$this->productType->getName()}"
            . "<br/>"
            . "тип: {$this->productType->getType()}"
            . "<br/>"
            . "Цена: {$this->productType->getPrice()} $";
    }

    public function buyProduct($ammount = 1) {
        echo "Товар {$this->productType->getName()} {$ammount} шт. положен в корзину";
    }
}