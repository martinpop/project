<?php

/* @var $container Nette\DI\Container */
$container = require __DIR__ . '/../app/bootstrap.php';
$container->getByType('Nette\Application\Application')->run();