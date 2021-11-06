<?php

class Smartphone extends BaseType implements ProductType
{

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return "Смартфон";
    }
}