<?php

require_once __DIR__ . '/bootstrap.php';

$builder = new BootstrapPageBuilder();
$director = new PageDirector($builder);
$director->buildPageNoStyles("keyword1", "description", "title page");
$builder->setContent("<h1>This is PAGE</h1>");
$page = $builder->getPage();
$page->render();