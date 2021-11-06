<?php

require_once(__DIR__ . '/bootstrap.php');
global $APP;

$product = $APP->makeProduct();

echo $APP->getInfoAboutProduct($product);