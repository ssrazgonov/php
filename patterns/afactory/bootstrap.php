<?php
//global interface;
require_once(__DIR__ . '/classes/Factory/AFactory.php');
require_once(__DIR__ . '/classes/Product/Interface/ProductA.php');
require_once(__DIR__ . '/classes/Product/Interface/ProductB.php');

// Products series A
require_once(__DIR__ . '/classes/Product/ClassA/ProductAClassA.php');
require_once(__DIR__ . '/classes/Product/ClassA/ProductBClassA.php');
require_once(__DIR__ . '/classes/Factory/FactoryClassA.php');

// Products series B
require_once(__DIR__ . '/classes/Product/ClassB/ProductAClassB.php');
require_once(__DIR__ . '/classes/Product/ClassB/ProductBClassB.php');
require_once(__DIR__ . '/classes/Factory/FactoryClassB.php');

global $FABRIC_CLASS;
$FABRIC_CLASS = FactoryClassB::class;