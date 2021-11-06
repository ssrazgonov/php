<?php

require_once(__DIR__ . '/classes/product/productInterface.php');
require_once(__DIR__ . '/classes/product/productA.php');
require_once(__DIR__ . '/classes/product/productB.php');
require_once(__DIR__ . '/classes/App.php');
require_once(__DIR__ . '/classes/AppTypeA.php');
require_once(__DIR__ . '/classes/AppTypeB.php');

global $APP;

$APP = new AppTypeA();