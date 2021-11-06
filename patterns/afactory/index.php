<?php
require_once(__DIR__ . '/bootstrap.php');
global $FABRIC_CLASS;

$productFactory = new $FABRIC_CLASS;

$productA = $productFactory->getProductA();
$productB = $productFactory->getProductA();

echo $productA->getProductType();
echo "<br/>";
echo $productB->getProductType();