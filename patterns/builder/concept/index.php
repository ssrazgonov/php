<?php

require_once __DIR__ . '/bootstrap.php';

$builder = new BuilderA();

$builder->stepA("Field A")->stepB("Field B");

$product = $builder->getProduct();

$product->getInfo();