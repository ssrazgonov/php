<?php

interface ProductType {
    public function getPrice(): int;
    public function getName(): string;
    public function getType(): string;
}