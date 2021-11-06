<?php
require_once(__DIR__ . '/classes/ProxyInterface.php');
require_once(__DIR__ . '/classes/proxy.php');
require_once(__DIR__ . '/classes/lib/Service.php');

$proxy = new Proxy();
$service = new Service();
$resultFromService = $service->make();
$resultFromProxy = $proxy->make();

//echo $resultFromService;
echo $resultFromProxy;