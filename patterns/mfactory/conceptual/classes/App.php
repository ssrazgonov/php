<?php

abstract class App
{
    abstract public function makeProduct() : productInterface;

    public function getInfoAboutProduct(productInterface $product) {
        return $product->purpose();
    }
}