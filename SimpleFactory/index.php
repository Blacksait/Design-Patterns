<?php

namespace SimpleFactory;

use SimpleFactory\Classes\CoreSimpleFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$factory = new CoreSimpleFactory();
$car = $factory->build("car");
print_r($car);

print_r(PHP_EOL);

$ship = $factory->build("ship");
print_r($ship);