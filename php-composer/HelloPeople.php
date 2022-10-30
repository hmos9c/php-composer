<?php

require_once __DIR__ . '/vendor/autoload.php';

use Hmos9c\PhpComposer\Data\People;

$people = new People("Sanas");

echo $people->sayHello("Akmal") . PHP_EOL;