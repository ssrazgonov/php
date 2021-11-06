<?php
require_once __DIR__ . '/bootstrap.php';

$iphone13 = new Smartphone(100, 'Apple Iphone 13');
$product = new Product($iphone13);

echo $product->getProductInfo();
echo "<br/>";
$product->buyProduct(5);

$yacht = new Yacht(3000, "Лодка Джонни");
$product->changeType($yacht);

echo "<br/>";
echo "<br/>";

echo $product->getProductInfo();
echo "<br/>";
$product->buyProduct(1);