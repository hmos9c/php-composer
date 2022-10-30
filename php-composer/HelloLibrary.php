<?php

require_once __DIR__ . '/vendor/autoload.php';

$customer = new \Hmos9c\PhpComposerHello\Constomer("Sanas");
echo $customer->sayHello("Akmal") . PHP_EOL;