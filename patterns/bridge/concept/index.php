<?php
require_once __DIR__ . "/bootstrap.php";

$implementationA = new ImplementationA();
$abstraction = new Abstraction($implementationA);

$abstraction->printImplementation();

$implementationB = new ImplementationB();
echo "<br/>";
$exabstraction = new ExtendAbstraction($implementationB);

$exabstraction->printImplementation();