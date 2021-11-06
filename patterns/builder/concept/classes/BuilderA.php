<?php

class BuilderA implements BuilderInterface
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function reset()
    {
        $this->product = new Product();
    }

    public function stepA($fieldA): BuilderInterface
    {
        $this->product->fieldA = $fieldA;

        return $this;
    }

    public function stepB($fieldB): BuilderInterface
    {
        $this->product->fieldB = $fieldB;
        return $this;
    }

    public function getProduct() {
        return $this->product;
    }
}